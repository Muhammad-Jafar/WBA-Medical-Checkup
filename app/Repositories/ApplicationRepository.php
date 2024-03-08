<?php

namespace App\Repositories;

use App\Contracts\ApplicationInterface;
use App\Models\Application;
use App\Http\Controllers\Controller;

class ApplicationRepository extends Controller implements ApplicationInterface
{
    private $model;

    public function __construct(Application $model)
    {
        $this->model = $model;
    }

    /**
     * 
     * Get total application by status 'PENDING'
     * @return integer
     */
    public function recentApplicant(): Int
    {
        return $this->model->where('status', 'PENDING')->count();
    }

    /**
     * 
     * Get total application by status 'PENDING' of today
     * @return integer
     */
    public function countTodayApplicant(): Int
    {
        return $this->model->where('status', 'PENDING')
        ->whereDate('created_at', now()->toDateString())
        ->count();
    }

    /**
     * 
     * Get total application by status 'PENDING' of current month
     * @return Int
     */
    public function countApplicant(string $status, string $year = null, string $month = null): Int
    {
        $model = $this->model->select('created_at', 'status')->where('status', 'PENDING');

        return $status === 'year'
        ? $model->whereYear('created_at', $year)->count()
        : $model->whereYear('created_at', date('Y'))->whereMonth('created_at', $month)->count();
    }

    /**
     * 
     * Get total application by status 'PENDING' of last 3 months
     * @return Int
     */
    public function lastThreeMonthsApplicant(): Int
    {
        return $this->model->where('status', 'PENDING')->count();
    }

    /**
     * Mengembalikan seluruh data yang dibutuhkan
     *
     * @return array
     */
    public function results(): array
    {
        return [
            'recentApplicant' => $this->recentApplicant(),
            'todayApplicant' => $this->countTodayApplicant(),
            'currentMonthApplicant' => $this->countApplicant('month', month: date('m')),
            'currentYearApplicant' => $this->countApplicant('year', month: date('Y')),
        ];
    }
}