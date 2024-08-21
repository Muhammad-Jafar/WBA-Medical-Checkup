<?php

namespace App\Http\Controllers\Google;

use App\Http\Controllers\Controller;
use App\Repositories\GoogleSheetsRepository;

class SheetsController extends Controller
{
    private GoogleSheetsRepository $sheets;

    public function __construct(GoogleSheetsRepository $sheets)
    {
        $this->sheets = $sheets;
    }

    public function sync()
    {
        $data = $this->sheets->read('2024-08-20');

        foreach ($data as $sheet) {
            $patientId = $this->sheets->getOrCreatePatient($sheet);
            $isApplicationExist = $this->sheets->isApplicationExist($sheet[0]);

            if ($patientId && !$isApplicationExist) {
                $this->sheets->createApplication($patientId, $sheet, $sheet[14]);
            }
        }

        return response()->json('Success to store data');
    }
}
