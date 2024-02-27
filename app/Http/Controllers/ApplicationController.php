<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ApplicationRequest;

class ApplicationController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index():View|JsonResponse
    {
        $application = Application::select('user_id', 'doctor_id', 'patient_id', 'purposes', 'status')
        ->orderBy('created_at')
        ->get();

        $patients = Patient::select('id', 'nik', 'name')->get();
        $doctors = Doctor::select('id', 'nip', 'name')->get();

        if(request()->ajax()) {
            return datatables()->of($application)
            ->addIndexColumn()
            ->addColumn('status', 'applications.datatable.status')
            ->addColumn('action', 'applications.datatable.action')
            ->rawColumns(['status', 'action'])
            ->toJson();
        }

        $applicationTrashedCount = Application::onlyTrashed()->count();

        return view('applications.index', [
            'patients' => $patients,
            'doctors' => $doctors,
            'applicationTrashedCount' => $applicationTrashedCount,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ApplicationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ApplicationRequest $request): RedirectResponse
    {

        // // Implode the purposes array into a string
        // // $purposes = implode(', ', $request->purposes);

        // foreach ($request->patient_id as $patient_id) {
        //     Auth::user()->applications()->create([
        //         'patient_id' => $patient_id,
        //         'purposes' => $request->purposes,
        //         'doctor_id' => $request->doctor_id,
        //         'requested_at' => now(),
        //     ]);
        // }

        Application::create($request->validated());
        return redirect()->route('applications.index')->with('success', 'Data berhasil ditambahkan!');
    }

}
