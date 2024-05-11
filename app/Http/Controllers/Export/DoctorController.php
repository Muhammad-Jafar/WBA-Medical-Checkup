<?php

namespace App\Http\Controllers\Export;

use App\Contracts\ExcelExportInterface;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Repositories\ExportRepository;
use Illuminate\Database\Eloquent\Collection;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DoctorController extends Controller implements ExcelExportInterface
{
    const FILE_NAME = 'REKAP-DATA-DOKTER-';

    public function __invoke()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $this->setExcelHeader($spreadsheet);

        $administrators = Doctor::select('name', 'sip', 'nip', 'created_at')->orderBy('name')->get();

        $this->setExcelContent($administrators, $sheet);

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
        $sheet->setCellValue('B1', 'Nama Lengkap');
        $sheet->setCellValue('C1', 'Nomor SIP');
        $sheet->setCellValue('D1', 'Nomor NIP');
        $sheet->setCellValue('E1', 'Tanggal Ditambahkan');

        foreach (range('A', 'E') as $paragraph) {
            $sheet->getColumnDimension($paragraph)->setAutoSize(true);
        }

        return $sheet;
    }

    /**
     * Mengisi konten untuk excel.
     *
     * @param Collection $administrators adalah data yang didapat dari eloquent/query builder.
     * @param Worksheet $sheet adalah instansiasi dari class Spreadsheet phpoffice.
     * @return Worksheet
     */
    public function setExcelContent(Collection $administrators, Worksheet $sheet): Worksheet
    {
        $cell = 2;
        foreach ($administrators as $key => $row) {
            $sheet->setCellValue('A' . $cell, $key + 1);
            $sheet->setCellValue('B' . $cell, $row->name);
            $sheet->setCellValue('C' . $cell, $row->sip);
            $sheet->setCellValue('D' . $cell, $row->nip);
            $sheet->setCellValue('E' . $cell, date('d-m-Y H:i:s', strtotime($row->created_at)));
            $cell++;
            $sheet->getStyle('A1:E' . ($cell - 1))->applyFromArray(ExportRepository::setStyle());
        }

        return $sheet;
    }
}
