<?php

namespace App\Contracts;


interface ReportInterface
{
    public function filterByDateRangeWithStatus(string $start, string $end, string $status): array;
}
