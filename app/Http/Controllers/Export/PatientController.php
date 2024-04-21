<?php

namespace App\Http\Controllers\Export;

use App\Contracts\ExcelExportInterface;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Repositories\ExportRepository;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Illuminate\Database\Eloquent\Collection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PatientController extends Controller implements ExcelExportInterface
{
    const FILE_NAME = 'REKAP-DATA-PASIEN-';

    public function __invoke()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $this->setExcelHeader($spreadsheet);

        $administrators = Patient::select('nik', 'name', 'gender', 'born_place', 'born_date', 'address', 'occupation', 'created_at')->orderBy('name')->get();

        $this->setExcelContent($administrators, $sheet);

        ExportRepository::outputTheExcel($spreadsheet, self::FILE_NAME);
    }

    /**
     * Menyiapkan isi header untuk excelnya.
     *
     * @param \PhpOffice\PhpSpreadsheet\Spreadsheet $spreadsheet
     * @return \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet
     */
    public function setExcelHeader(Spreadsheet $spreadsheet): Worksheet
    {
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'NIK');
        $sheet->setCellValue('C1', 'Nama Lengkap');
        $sheet->setCellValue('D1', 'Jenis Kelamin');
        $sheet->setCellValue('E1', 'TTL');
        $sheet->setCellValue('F1', 'Alamat');
        $sheet->setCellValue('G1', 'Pekerjaan');
        $sheet->setCellValue('H1', 'Tanggal Ditambahkan');

        foreach (range('A', 'H') as $paragraph) {
            $sheet->getColumnDimension($paragraph)->setAutoSize(true);
        }

        return $sheet;
    }

    /**
     * Mengisi konten untuk excel.
     *
     * @param \Illuminate\Database\Eloquent\Collection adalah data yang didapat dari eloquent/query builder.
     * @param \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $sheet adalah instansiasi dari class Spreadsheet phpoffice.
     * @return \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet
     */
    public function setExcelContent(Collection $administrators, Worksheet $sheet): Worksheet
    {
        $cell = 2;
        foreach ($administrators as $key => $row) {
            $sheet->setCellValue('A' . $cell, $key + 1);
            $sheet->setCellValue('B' . $cell, $row->nik);
            $sheet->setCellValue('C' . $cell, $row->name);
            $sheet->setCellValue('D' . $cell, $row->gender === 1 ? 'Laki-laki' : 'Perempuan' );
            $sheet->setCellValue('E' . $cell, $row->born_place . ', ' . monthToFullBulan($row->born_date));
            $sheet->setCellValue('F' . $cell, $row->address);
            $sheet->setCellValue('G' . $cell, $row->occupation);
            $sheet->setCellValue('H' . $cell, date('d-m-Y H:i:s', strtotime($row->created_at)));
            $cell++;
            $sheet->getStyle('A1:H' . ($cell - 1))->applyFromArray(ExportRepository::setStyle());
        }

        return $sheet;
    }
}
