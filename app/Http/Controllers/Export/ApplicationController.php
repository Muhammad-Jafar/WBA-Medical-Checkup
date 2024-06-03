<?php

namespace App\Http\Controllers\Export;

use App\Contracts\ExcelExportInterface;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Repositories\ExcelExportRepository;
use App\Repositories\ExportRepository;
use Illuminate\Database\Eloquent\Collection;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ApplicationController extends Controller implements ExcelExportInterface
{
    const FILE_NAME = 'Laporan-SKBS-';

    public function __invoke(string $start_date, string $end_date, string $status)
    {
        $startDate = date('Y-m-d', strtotime($start_date));
        $endDate = date('Y-m-d', strtotime($end_date));

        $spreadsheet = new Spreadsheet();
        $sheet = $this->setExcelHeader($spreadsheet);

        $application = Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')
            ->select('id', 'user_id', 'patient_id', 'doctor_id', 'purposes', 'requested_at', 'status')
            ->whereBetween('requested_at', [$startDate, $endDate])
            ->when($status != 'ALL', function ($query) use ($status) {
                $query->where('status', $status);
            })
            ->orderBy('requested_at')
            ->get();
        $this->setExcelContent($application, $sheet);

        ExportRepository::outputTheExcel($spreadsheet, self::FILE_NAME);
    }

    /**
     * Menyiapkan isi header untuk excelnya.
     *
     * @param Spreadsheet $spreadsheet
     * @return Worksheet
     */
    public function setExcelHeader(Spreadsheet $spreadsheet): Worksheet
    {
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Pasien');
        $sheet->setCellValue('C1', 'Keperluan');
        $sheet->setCellValue('D1', 'Dokter pemeriksa');
        $sheet->setCellValue('E1', 'Oleh');
        $sheet->setCellValue('F1', 'Tanggal');
        $sheet->setCellValue('G1', 'Status');

        foreach (range('A', 'G') as $paragraph) {
            $sheet->getColumnDimension($paragraph)->setAutoSize(true);
        }

        return $sheet;
    }

    /**
     * Mengisi konten untuk excel.
     *
     * @param Collection $students adalah data yang didapat dari eloquent/query builder.
     * @param Worksheet $sheet adalah instansiasi dari class Spreadsheet phpoffice.
     * @return Worksheet
     */
    public function setExcelContent(Collection $students, Worksheet $sheet): Worksheet
    {
        $cell = 2;
        foreach ($students as $key => $row) {
            $sheet->setCellValue('A' . $cell, $key + 1);
            $sheet->setCellValue('B' . $cell, $row->patients->name);
            $sheet->setCellValue('C' . $cell, $row->purposes);
            $sheet->setCellValue('D' . $cell, $row->doctors->name);
            $sheet->setCellValue('E' . $cell, $row->users->name);
            $sheet->setCellValue('F' . $cell, date('d-m-Y', strtotime($row->requested_at)));
            $sheet->setCellValue('G' . $cell, $row->status);
            $cell++;
            $sheet->getStyle('A1:G' . ($cell - 1))->applyFromArray(ExportRepository::setStyle());
        }

        return $sheet;
    }
}
