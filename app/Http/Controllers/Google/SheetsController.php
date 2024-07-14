<?php

namespace App\Http\Controllers\Google;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Repositories\GoogleSheetsRepository;
use Illuminate\Support\Str;

class SheetsController extends Controller
{
    private GoogleSheetsRepository $sheets;

    public function __construct(GoogleSheetsRepository $sheets)
    {
        $this->sheets = $sheets;
    }

    public function sync()
    {
        $data = $this->sheets->read();
        array_shift($data);
        $patientId = null;

        foreach ($data as $sheet) {
            $getIndex = $this->sheets->getIndexCheckupType($sheet[14]);
            $isNikExist = $this->sheets->isNikExist($sheet[3]);
            $newPatientId = Str::ulid();

            if ($isNikExist == null) {
                $this->sheets->storePatient($sheet, $newPatientId);
                $patientId = Patient::select('id')->where('nik', $sheet[3])->first();
            }

            if ($patientId != null) {
                $this->sheets->createApplication($sheet, $patientId->id, $getIndex);
            }
        }

        return response()->json('Success to store data');
    }
}
