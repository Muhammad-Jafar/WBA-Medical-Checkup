<?php

namespace App\Http\Controllers;

use App\Repositories\ReportRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ReportController extends Controller
{
    public function __construct(private ReportRepository $reportRepository)
    {
    }

    /**
     * Handle the incoming request.
     *
     * @return View|RedirectResponse
     */
    public function __invoke(): View|RedirectResponse
    {
        $filteredResult = [];
        $startDate = request()->get('start_date');
        $endDate = request()->get('end_date');
        $status = request()->get('status');

        if (request()->has('start_date') && request()->has('end_date')) {
            if ($startDate === null && $endDate === null) {
                return redirect()->back()
                    ->with('warning', 'Tanggal awal atau tanggal akhir tidak boleh kosong!');
            }

            $filteredResult = $this->reportRepository->filterByDateRangeWithStatus($startDate, $endDate, $status);
        }

        return view('reports.index', [
            'reports' => $filteredResult,
        ]);
    }
}
