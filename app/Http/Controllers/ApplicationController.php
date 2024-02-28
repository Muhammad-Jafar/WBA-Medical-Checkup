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
use Illuminate\Support\Str;

class ApplicationController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index():View|JsonResponse
    {
        $application = Application::with('user:id,name', 'patient:id,name', 'doctor:id,name')
        ->select('user_id', 'doctor_id', 'patient_id', 'purposes', 'status')
        ->orderBy('created_at')
        ->get();

        $patients = Patient::select('id', 'nik', 'name')->get();
        $doctors = Doctor::select('id', 'nip', 'name')->get();

        if(request()->ajax()) {
            return datatables()->of($application)
            ->addIndexColumn()
            ->addColumn('user_id', fn ($model) => $model->user->name)
            ->addColumn('patient_id', fn ($model) => $model->patient->name)
            ->addColumn('doctor_id', fn ($model) => $model->doctor->name)
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
        // $validatedData = $request->validated();
        // $application = [
        //     // 'id' => Str::uuid(),
        //     'user_id' => Auth::id(),
        //     'patient_id' => $validatedData['patient_id'],
        //     'doctor_id' => $validatedData['doctor_id'],
        //     'purposes' => $validatedData['purposes'],
        //     'requested_at' => now(),
        // ];

        // logger()->info(['ID UUID', Str::uuid()]);

        // foreach($request->patient_id as $patient_id)
        // {
            // Application::create([
            //     'id' => Str::uuid(),
            //     'user_id' => Auth::id(),
            //     'patient_id' => $validatedData['patient_id'],
            //     'doctor_id' => $validatedData['doctor_id'],
            //     'purposes' => $validatedData['purposes'],
            //     'requested_at' => now(),
            // ]);
        // }

        Application::create([
            // 'id' => Str::uuid(),
            'user_id' => Auth::id(),
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'purposes' => $request->purposes,
            'requested_at' => now(),
        ]);

        // Application::create($application);
        return redirect()->route('applications.index')->with('success', 'Data berhasil ditambahkan!');
    }

}

