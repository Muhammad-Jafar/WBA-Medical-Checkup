<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;
use App\Repositories\ApplicationRepository;

class DashboardController extends Controller
{
    public function __construct(private readonly ApplicationRepository $applicationRepository)
    {
    }

    /**
     * Display data for given value.
     *
     * @return View
     */
    public function __invoke(): View
    {
        $dashboard = Cache::remember('dashboard-data', now()->addHours(2), function () {
            $application = Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')
                ->select('id', 'user_id', 'patient_id', 'doctor_id', 'purposes', 'status', 'created_at')
                ->whereDate('requested_at', now()->toDateString())
                ->where('status', 'PENDING')
                ->latest()
                ->get();
            $getpendingApplicantToday = $this->applicationRepository
                ->pendingApplicant('today');
            $getLastThreeMonth = $this->applicationRepository
                ->countApplicantLastThreeMonth();
            $getLatestApplication = $this->applicationRepository
                ->latestApplications(['id', 'user_id', 'doctor_id', 'patient_id', 'purposes', 'created_at'], 5);

            return [
                'patientCount' => Patient::count(),
                'doctorCount' => Doctor::count(),
                'applicationsToday' => $application,
                'totalApplicantCount' => $getpendingApplicantToday,
                'lastThreeMonth' => $getLastThreeMonth,
                'getLatest' => $getLatestApplication,
            ];
        });

        return view('dashboard.index', $dashboard);
    }
}
