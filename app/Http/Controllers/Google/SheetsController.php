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
        $data = $this->sheets->read();

        foreach ($data as $sheet) {
            $patientId = $this->sheets->getOrCreatePatient($sheet);
            $isApplicationExist = $this->sheets->isApplicationExist($patientId, $sheet[0]);

            if ($patientId && !$isApplicationExist) {
                $this->sheets->createApplication($patientId, $sheet, $sheet[14]);
            }
        }

        return redirect()->route('application.index')
            ->with('success', 'Data berhasil disinkron!');
    }
}
