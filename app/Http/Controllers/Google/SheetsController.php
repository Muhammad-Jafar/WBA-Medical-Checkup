<?php

namespace App\Http\Controllers\Google;

use App\Http\Controllers\Controller;
use App\Models\Patient;
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
        $isNiKExist = $this->sheets->filterNik();

        if (!$isNiKExist) {
            foreach ($data as $row => $sheet) {

                if ($sheet == 0) {
                    continue;
                }

               /* Patient::created([
                    'name' => $sheet[$row][2],
                    'nik' => $sheet[$row][3],
                    'gender' => $sheet[$row][4],
                    'born_place' => $sheet[$row][5],
                    'born_date' => $sheet[$row][6],
                    'address' => $sheet[$row][7],
                    'occupation' => $sheet[$row][8],
                    'phone' => $sheet[$row][9],
                ]);*/

                return response()->json($row[2]);
            }
        }

        /*return response()->json("Success");*/
    }
}
