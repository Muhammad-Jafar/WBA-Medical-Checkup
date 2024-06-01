<?php

namespace App\Repositories;

use App\Contracts\DashboardChartInterface;
use App\Http\Controllers\Controller;
use App\Models\Application;

class DashboardChartRepository extends Controller implements DashboardChartInterface
{
    private $model, $startOfQuarter, $endOfQuarter;

    public function __construct(Application $model)
    {
        $this->model = $model;
        $this->startOfQuarter = now()->startOfQuarter()->format('Y-m-d');
        $this->endOfQuarter = now()->endOfQuarter()->format('Y-m-d');
    }

    /**
     * Hitung seluruh kolom amount pada tabel cash_transactions dipisahkan dengan bulan dari 1-12.
     *
     * @return array
     */
    public function applicantPerMonths(): array
    {
        $month = ['jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'agu', 'sep', 'okt', 'nov', 'des'];

        for ($i = 1; $i <= 12; $i++) {
            $applications = $this->model->select('patient_id', 'requested_at')
                ->whereMonth('requested_at', "{$i}")
                ->whereYear('requested_at', date('Y'))
                ->sum('patient_id');

            $result[$month[$i - 1]] = $applications;
        }

        return $result;
    }

    /**
     * Mengembalikan seluruh data yang dibutuhkan
     *
     * @return array
     */
    public function results(): array
    {
        return [
            'totalApplications' => $this->applicantPerMonths(),

        ];
    }
}
