<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\View\View;
use App\Repositories\ApplicationRepository;

class DashboardController extends Controller
{
    public function __construct(private ApplicationRepository $applicationRepository)
    {
    }

    /**
     * Display data for given value.
     *
     * @return View
     */
    public function __invoke(): View
    {
        $getpendingApplicantToday = $this->applicationRepository
            ->pendingApplicant('today');

        $getLastThreeMonth = $this->applicationRepository
            ->countApplicantLastThreeMonth();

        $getLatestApplication = $this->applicationRepository
            ->latestApplications(['id', 'user_id', 'doctor_id', 'patient_id', 'purposes', 'created_at'], 5);

        $application = Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')
            ->select('id', 'user_id', 'patient_id', 'doctor_id', 'purposes', 'status', 'created_at')
            ->whereDate('requested_at', now()->toDateString())
            ->where('status', 'PENDING')
            ->latest()
            ->get();

        return view('dashboard.index', [
            'patientCount' => Patient::count(),
            'doctorCount' => Doctor::count(),
            'applicationsToday' => $application,
            'totalApplicantCount' => $getpendingApplicantToday,
            'lastThreeMonth' => $getLastThreeMonth,
            'getLatest' => $getLatestApplication,
        ]);
    }
}
