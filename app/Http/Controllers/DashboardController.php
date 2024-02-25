<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display data for given value.
     *
     * @return \Illuminate\View\View
     */
    public function __invoke(): View
    {
        return view('dashboard.index', [
            'patientCount' => Patient::count(),
            'doctorCount' => Doctor::count(),
        ]);
    }
}