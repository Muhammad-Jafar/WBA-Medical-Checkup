<?php

namespace App\Repositories;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Patient;
use Carbon\Carbon;
use Google\Client;
use Google_Service_Sheets as Sheets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GoogleSheetsRepository extends Controller
{
    private string $range;
    private string $documentId;
    private Sheets $service;
    private Client $client;

    public function __construct()
    {
        $this->client = $this->setupClient();
        $this->service = new Sheets($this->client);
        $this->documentId = "17x_pbwNk2H-EZxhfO84ReOxwJmM5KO0v8brUBIkQEps";
        $this->range = 'A:O';
    }

    private function setupClient()
    {
        $client = new Client();
        $client->setApplicationName("Google Sheets");
        $client->setScopes(Sheets::SPREADSHEETS);
        $client->setAuthConfig(storage_path("app/medcheckup-credential.json"));
        $client->setAccessType('offline');

        return $client;
    }

    private function getSheet()
    {
        return $this->service->spreadsheets_values
            ->get($this->documentId, $this->range)
            ->getValues();
    }

    /**
     * Get date for given sheets data,
     * with option either custom date or default (today)
     *
     * @param string|null $date
     * @return array
     * */
    public function read(string $date = null): array
    {
        $data = array_slice($this->getSheet(), 1);
        $customDate = $date ? Carbon::parse($date) : Carbon::now();

        return array_values(
            array_filter($data, function ($item) use ($customDate) {
                $timestamp = Carbon::createFromFormat('d/m/Y H:i:s', $item[0]);
                return $timestamp->isSameDay($customDate);
            })
        );
    }

    /**
     * Check if the application form is only exist once for same NIK in a day
     *
     * @param string $date
     * @return null|string
     * */
    public function isApplicationExist(string $date): ?string
    {
        $application = Application::select('patient_id')
            ->where(
                'requested_at',
                Carbon::createFromFormat('d/m/Y H:i:s', $date)->format('Y-m-d')
            )
            ->first();

        return $application ? $application->patient_id : null;
    }

    /**
     * Get type of checkup
     *
     * @param string $checkupType
     * @return int
     * */
    private function getCheckupType(string $checkupType): int
    {
        $trimmedString = '';

        if (preg_match('/^(Paket \d+)/', $checkupType, $matches)) {
            $trimmedString = ($matches[1]);
        }

        return match ($trimmedString) {
            'Paket 2' => 2,
            'Paket 3' => 3,
            'Paket 4' => 4,
            default => 1,
        };
    }

    /**
     * Get patient id by NIK
     *
     * @param string $nik
     * @return null|string
     * */
    private function getOrNullPatientId(string $nik): ?string
    {
        $patient = Patient::select('id')
            ->where('nik', $nik)
            ->first();

        return $patient ? $patient->id : null;
    }

    /**
     * Store pateint if isn't exists
     * then return patientId
     * @param array $sheet
     * @return string
     * */
    public function getOrCreatePatient(array $sheet): string
    {
        $patientId = $this->getOrNullPatientId($sheet[3]);

        if (!$patientId) {
            Patient::create([
                'name' => $sheet[2],
                'nik' => $sheet[3],
                'gender' => $sheet[4] ? 1 : 0,
                'born_place' => $sheet[5],
                'born_date' => $sheet[6],
                'address' => $sheet[7],
                'occupation' => $sheet[8],
                'phone' => $sheet[9],
            ]);
        }

        return $patientId ?: Patient::latest('id')->first()->id;
    }

    /**
     * Create patient application request
     *
     * @param string $patientId
     * @param array $sheet
     * @param string $checkuptypeId
     * @return void
     * */
    public function createApplication(string $patientId, array $sheet, string $checkuptypeId)
    {
        $checkypType = $this->getCheckupType($checkuptypeId);

        Application::create([
            'user_id' => Auth::user()->id,
            'patient_id' => $patientId,
            'checkuptype_id' => $checkypType,
            'purposes' => $sheet[10],
            'requested_at' => Carbon::createFromFormat('d/m/Y H:i:s', $sheet[0])
                ->format('Y-m-d H:i:s'),
            'height_body' => $sheet[11],
            'mass_body' => $sheet[12],
            'blod_type' => $sheet[13],
        ]);
    }
}
