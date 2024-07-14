<?php

namespace App\Repositories;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Patient;
use Google\Client;
use Google_Service_Sheets as Sheets;
use Illuminate\Support\Facades\Auth;

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

    public function setupClient()
    {
        $client = new Client();
        $client->setApplicationName("Google Sheets");
        $client->setScopes(Sheets::SPREADSHEETS);
        $client->setAuthConfig(storage_path("app/medcheckup-credential.json"));
        $client->setAccessType('offline');

        return $client;
    }

    public function read()
    {
        return $this->service->spreadsheets_values
            ->get($this->documentId, $this->range)
            ->getValues();
    }

    public function isNikExist(string $nik)
    {
        $check = Patient::select('nik')->where('nik', $nik)->first();
        return $check ? $check->nik : null;
    }

    public function getNik()
    {
        $data = $this->read();
        array_shift($data);

        foreach ($data as $nik) {
            $patient = Patient::select('nik')->where('nik', $nik[3])->first();
            if ($patient) {
                return $patient->nik;
            }
        }

        return '';
    }

    public function getIndexCheckupType(string $checkupType): int
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

    public function storePatient(array $sheet, string $id)
    {
        if (!$this->isNikExist($sheet[3])) {
            Patient::create([
                'id' => $id,
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
    }

    public function createApplication(array $sheet, string $patientId, int $checkupTypeId)
    {
        Application::create([
            'user_id' => Auth::user()->id,
            'patient_id' => $patientId,
            'checkuptype_id' => $checkupTypeId,
            'purposes' => $sheet[10],
            'requested_at' => now(),
            'height_body' => $sheet[11],
            'mass_body' => $sheet[12],
            'blod_type' => $sheet[13],
        ]);
    }
}
