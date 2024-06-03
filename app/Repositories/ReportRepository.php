<?php

namespace App\Repositories;

use App\Contracts\ReportInterface;
use App\Http\Controllers\Controller;
use App\Models\Application;

class ReportRepository extends Controller implements ReportInterface
{
    public function __construct(private Application $model)
    {
    }

    /**
     * Mendapatkan data hasil filter berdasarkan tanggal awal dan tanggal akhir.
     *
     * @param string $start tanggal awal.
     * @param string $end tanggal akhir.
     * @param string|null $status status pasien (PENDING, APPROVED, REJECTED) OR ALL for no status matter
     * @return array
     */
    public function filterByDateRangeWithStatus(string $start, string $end, string $status): array
    {
        $result = [];
        $startDate = date('Y-m-d', strtotime($start));
        $endDate = date('Y-m-d', strtotime($end));

        $filterApplicant = $this->model->with('users:id,name', 'patients:id,name', 'doctors:id,name')
            ->select('id', 'user_id', 'patient_id', 'doctor_id', 'purposes', 'requested_at', 'status')
            ->whereBetween('requested_at', [$startDate, $endDate])
            ->when($status != 'ALL', function ($query) use ($status) {
                $query->where('status', $status);
            })
            ->orderBy('requested_at')
            ->get();

        $result['applicant'] = $filterApplicant;
        $result['countApplicant'] = $filterApplicant->count();
        $result['startDate'] = date('d-m-Y', strtotime($startDate));
        $result['endDate'] = date('d-m-Y', strtotime($endDate));
        $result['status'] = $status;

        return $result;
    }
}
