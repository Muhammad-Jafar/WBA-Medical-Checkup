<?php

if (!function_exists('toInt')) {
    /**
     * From string to int
     *
     * @param string $string
     * @returns Integer
     */
    function toInt(string $string)
    {
        return (int)$string;
    }
}

if (!function_exists('indonesianCurrency')) {
    /**
     * Ubah mata uang menjadi format indonesia
     *
     * @param Integer $number
     * @return String
     */
    function indonesianCurrency(int $number): string
    {
        return 'Rp. ' . number_format($number, 2, ',');
    }
}

if (!function_exists('getDayname')) {
    /**
     * Get name of the given date
     *
     * @param null|string $date
     * @returns string
     * */
    function getDayname(string $date = null): string
    {
        if ($date == null) {
            $date = date('Y-m-d');
        }

        return date('l', strtotime($date));
    }
}

if (!function_exists('monthToBulan')) {
    /**
     * Convert the month to a string with indonesian format.
     *
     * @param $input
     * @return string
     */
    function monthToBulan($input): string
    {
        $months = [
            '01' => 'JANUARI',
            '02' => 'FEBRUARI',
            '03' => 'MARET',
            '04' => 'APRIL',
            '05' => 'MEI',
            '06' => 'JUNI',
            '07' => 'JULI',
            '08' => 'AGUSTUS',
            '09' => 'SEPTEMBER',
            '10' => 'OKTOBER',
            '11' => 'NOVEMBER',
            '12' => 'DESEMBER'
        ];

        return $months[$input] ?? 'Unpexpected month';
    }
}

if (!function_exists('monthToFullBulan')) {
    /**
     * Convert the month to a string with indonesian format.
     *
     * @param $input
     * @return string
     */
    function monthToFullBulan($input): string
    {
        $monthsIndonesian = [
            'January' => 'JANUARI',
            'February' => 'FEBRUARI',
            'March' => 'MARET',
            'April' => 'APRIL',
            'May' => 'MEI',
            'June' => 'JUNI',
            'July' => 'JULI',
            'August' => 'AGUSTUS',
            'September' => 'SEPTEMBER',
            'October' => 'OKTOBER',
            'November' => 'NOVEMBER',
            'December' => 'DESEMBER'
        ];

        try {
            $date = new DateTime($input);
            $monthEng = $date->format('F'); // Get full English month name
            $monthInd = $monthsIndonesian[$monthEng] ?? $monthEng; // Translate month

            return $date->format('j ') . $monthInd . $date->format(' Y'); // Format date as '1 April 2024'
        } catch (Exception $e) {
            // Handle exception if the date format is incorrect
            return "Invalid date format";
        }
    }
}

if (!function_exists('monthToBulanRomawi')) {
    /**
     * Convert the month to a string with indonesian format.
     *
     * @param $input
     * @return string
     */
    function monthToBulanRomawi($input): string
    {
        $months = [
            '01' => 'I',
            '02' => 'II',
            '03' => 'III',
            '04' => 'IV',
            '05' => 'V',
            '06' => 'VI',
            '07' => 'VII',
            '08' => 'VIII',
            '09' => 'IX',
            '10' => 'X',
            '11' => 'XI',
            '12' => 'XII'
        ];

        return $months[$input] ?? 'Unpexpected month';
    }
}

if (!function_exists('timeAgo')) {
    function timeAgo($timestamp = null): string
    {
        if ($timestamp === null) {
            return "Tidak pernah";
        }

        $current = new DateTime();
        $ago = new DateTime($timestamp);
        $interval = $current->diff($ago);

        if ($interval->y > 0) {
            return $interval->y == 1 ? "1 tahun lalu" : $interval->y . " tahun lalu";
        } elseif ($interval->m > 0) {
            return $interval->m == 1 ? "1 bulan lalu" : $interval->m . " bulan lalu";
        } elseif ($interval->d > 0) {
            return $interval->d == 1 ? "1 hari lalu" : $interval->d . " hari lalu";
        } elseif ($interval->h > 0) {
            return $interval->h == 1 ? "1 jam lalu" : $interval->h . " jam lalu";
        } elseif ($interval->i > 0) {
            return $interval->i == 1 ? "1 menit lalu" : $interval->i . " menit lalu";
        } elseif ($interval->s > 0) {
            return $interval->s == 1 ? "1 detik lalu" : $interval->s . " Barusan";
        } else {
            return "Saat ini";
        }
    }
}
