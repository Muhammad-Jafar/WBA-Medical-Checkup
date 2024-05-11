<?php

namespace App\Http\Controllers\Export;

use App\Contracts\ExcelExportInterface;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Repositories\ExcelExportRepository;
use Illuminate\Database\Eloquent\Collection;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ApplicationController extends Controller implements ExcelExportInterface
{
    const FILE_NAME = 'laporan SKBS';

    public function __invoke()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $this->setExcelHeader($spreadsheet);
        $application = Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')->get();
        $this->setExcelContent($application, $sheet);

        ExcelExportRepository::outputTheExcel($spreadsheet, self::FILE_NAME);
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
        $sheet->setCellValue('B1', 'NIS/NISN');
        $sheet->setCellValue('C1', 'Nama Lengkap');
        $sheet->setCellValue('D1', 'Jenis Kelamin');
        $sheet->setCellValue('E1', 'Kelas');
        $sheet->setCellValue('F1', 'Jurusan');
        $sheet->setCellValue('G1', 'Tahun Ajaran');

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
            $sheet->setCellValue('B' . $cell, $row->student_identification_number);
            $sheet->setCellValue('C' . $cell, $row->name);
            $sheet->setCellValue('D' . $cell, $row->gender === 1 ? 'Laki-laki' : 'Perempuan');
            $sheet->setCellValue('E' . $cell, $row->school_class->name);
            $sheet->setCellValue('F' . $cell, $row->school_major->name);
            $sheet->setCellValue('G' . $cell, $row->school_year_start . ' - ' . $row->school_year_end);
            $cell++;
            $sheet->getStyle('A1:G' . ($cell - 1))->applyFromArray(ExcelExportRepository::setStyle());
        }

        return $sheet;
    }
}
