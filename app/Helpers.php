<?php

use Carbon\Carbon;

if (!function_exists('indonesianCurrency')) {
    /**
     * Ubah mata uang menjadi format indonesia
     *
     * @param Integer $number
     * @return String
     */
    function indonesianCurrency(int $number): String
    {
        return 'Rp. ' . number_format((int) $number, 2, ',',);
    }
}


if (!function_exists('reverseDate')) {
    /**
     * Format the date from d-m-Y format to Y-m-d format.
     *
     * @param string $date
     * @return string
     */
    function reverseDate(string $date): string
    {
        return Carbon::createFromFormat('d-m-Y', $date)->format('Y-m-d');
    }
}
