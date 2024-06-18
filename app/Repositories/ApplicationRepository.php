<?php

namespace App\Repositories;

use App\Contracts\ApplicationInterface;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Preference;

class ApplicationRepository extends Controller implements ApplicationInterface
{
    private Preference $preference;
    private Application $model;

    public function __construct(
        Application $model,
        Preference  $preference,
    )
    {
        $this->model = $model;
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
    public function pendingApplicant(): int
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
        return $this->model->whereDate('requested_at', now()->toDateString())
            ->count();
    }

    /**
     *
     * Get total application of current month or year
     * @param string $option which is month or year
     * @return Int
     */
    public function countApplicant(string $option): int
    {
        $model = $this->model->select('requested_at');

        return $option === 'year'
            ? $model->whereYear('requested_at', $option)
                ->count()
            : $model->whereYear('requested_at', date('Y'))
                ->whereMonth('requested_at', date('m'))
                ->count();
    }

    /**
     *
     * Get total application of current month or year
     * @return Int
     */
    public function countApplicantLastThreeMonth(): int
    {
        $model = $this->model->select('requested_at');

        return $model->whereBetween('requested_at', [now()->subMonths(3)->toDateString(), now()->toDateString()])
            ->count();
    }

    /**
     * Get limit application by input from references table
     * @return bool
     */
    public function checkLimitApplicant(): bool
    {
        $pref = $this->preference->select('input')
            ->where('id_preferences', '1')
            ->value('input');

        $countApplicantToday = $this->model->whereDate('requested_at', now()->toDateString())
            ->count();

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
            'recentApplicant' => $this->pendingApplicant(),
            'todayApplicant' => $this->countTodayApplicant(),
            'currentMonthApplicant' => $this->countApplicant(date('m')),
            'currentYearApplicant' => $this->countApplicant(date('Y')),
            'checkLimitApplicant' => $this->checkLimitApplicant()
        ];
    }
}
