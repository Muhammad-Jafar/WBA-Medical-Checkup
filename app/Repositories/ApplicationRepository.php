<?php

namespace App\Repositories;

use App\Contracts\ApplicationInterface;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Preference;
use App\Models\User;

class ApplicationRepository extends Controller implements ApplicationInterface
{
    private $model, $admin, $doctor, $patient, $preference;

    public function __construct(
        Application $model,
        User        $admin,
        Doctor      $doctor,
        Patient     $patient,
        Preference  $preference,
    )
    {
        $this->model = $model;
        $this->admin = $admin;
        $this->doctor = $doctor;
        $this->patient = $patient;
        $this->preference = $preference;
    }

    /**
     * Ambil seluruh data paling terbaru pada tabel applications pada database.
     *
     * Jika $limit === null maka tampilkan seluruh data applications tanpa limit.
     * Jika $limit !== null maka tampilkan seluruh data applications dengan limit.
     *
     * @param array $columns kolom apa saja yang ingin difetch.
     * @param int|null $limit limit data yang ingin ditampilkan.
     * @return Object
     */
    public function latestApplications(array $columns, ?int $limit): object
    {
        $model = $this->model->with('users', 'doctors', 'patients')->select($columns);

        return is_null($limit)
            ? $model->latest()->get()
            : $model->take($limit)->latest()->get();
    }

    /**
     *
     * Get total application by status 'PENDING'
     * @return integer
     */
    public function recentApplicant(): int
    {
        return $this->model->where('status', 'PENDING')->count();
    }

    /**
     *
     * Get total application by status 'PENDING' of today
     * @return integer
     */
    public function countTodayApplicant(): int
    {
        return $this->model->where('status', 'PENDING')
            ->whereDate('created_at', now()->toDateString())
            ->count();
    }

    /**
     *
     * Get total application by status 'PENDING' of current month
     * @param string $status
     * @param string|null $year
     * @param string|null $month
     * @return Int
     */
    public function countApplicant(string $status, string $year = null, string $month = null): int
    {
        $model = $this->model->select('created_at');

        return $status === 'year'
            ? $model->whereYear('created_at', $year)->count()
            : $model->whereYear('created_at', date('Y'))->whereMonth('created_at', $month)->count();
    }

    /**
     *
     * Get limit application by input from references table
     * @return bool
     */
    public function checkLimitApplicant(): bool
    {
        $pref = $this->preference->select('input')->where('id_preferences', '1')->value('input');
        $countApplicantToday = $this->model->where('status', 'PENDING')
            ->whereDate('requested_at', now()->toDateString())->count();

        return $countApplicantToday == $pref;
    }

    /**
     * Return results as expected
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
            'checkLimitApplicant' => $this->checkLimitApplicant()
        ];
    }
}
