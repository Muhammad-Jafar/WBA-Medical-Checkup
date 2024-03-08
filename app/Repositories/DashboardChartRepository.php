<?php

namespace App\Repositories;

use App\Contracts\DashboardChartInterface;
use App\Models\Application;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

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
     * 
     * Get total application by status 'PENDING' of today
     * @return integer
     */
    public function countApplicant(): Int
    {
        return $this->model->where('status', 'PENDING')
        ->count();
    }

     /**
     * Mengembalikan seluruh data yang dibutuhkan
     *
     * @return array
     */
    public function results(): array
    {
        return [
            'totalApplications' => $this->countTodayApplicant(),
        ];
    }
}