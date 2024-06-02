<?php

namespace App\Repositories;

use App\Contracts\DashboardChartInterface;
use App\Http\Controllers\Controller;
use App\Models\Application;

class DashboardChartRepository extends Controller implements DashboardChartInterface
{
    public function __construct(private Application $model)
    {
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
            $applications = $this->model->select('requested_at')
                ->whereMonth('requested_at', "$i")
                ->whereYear('requested_at', date('Y'))
                ->count();

            $result[$month[$i - 1]] = $applications;
        }

        return $result;
    }

}
