<?php

namespace App\Contracts;

interface ToExcelInterface
{
    public static function setStyle(): array;
    public static function outputTheExcel(object $spreadsheet, string $fileName): void;
}
