<?php

namespace App\Http\Controllers;

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
        $getTotalApplication = $this->applicationRepository->countApplicant('year', month: date('Y'));

        $getLatestApplication = $this->applicationRepository->latestApplications(['id', 'user_id', 'doctor_id', 'patient_id', 'purposes', 'created_at'], 5);

        return view('dashboard.index', [
            'patientCount' => Patient::count(),
            'doctorCount' => Doctor::count(),
            'totalApplicantCount' => $getTotalApplication,
            'getLatest' => $getLatestApplication,
        ]);
    }
}
