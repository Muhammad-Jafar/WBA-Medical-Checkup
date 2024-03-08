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
use App\Repositories\ApplicationRepository;

class ApplicationController extends Controller
{
    private $applicationRepository, $startOfQuarter, $endOfQuarter;

    public function __construct(ApplicationRepository $applicationRepository)
    {
        $this->applicationRepository = $applicationRepository;
        $this->startOfQuarter = now()->startOfQuarter()->format('Y-m-d');
        $this->endOfQuarter = now()->endOfQuarter()->format('Y-m-d');
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index():View|JsonResponse
    {
        $application = Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')
        ->select('id','user_id', 'patient_id', 'doctor_id', 'purposes', 'status')
        ->latest()
        ->get();

        // $application = Application::select(
        //     'applications.user_id', 'applications.doctor_id', 'applications.patient_id', 'applications.purposes', 'applications.status',
        //     'users.id', 'users.name',
        //     'patients.id', 'patients.name',
        //     'doctors.id', 'doctors.name',
        //     )
        // ->join('users', 'applications.user_id', '=','users.id')
        // ->join('patients', 'applications.patient_id', '=','patients.id')
        // ->join('doctors', 'applications.doctor_id', '=','doctors.id')
        // ->orderBy('applications.created_at')
        // ->get();

        $patient = Patient::select('id', 'nik', 'name')->get();
        $doctor = Doctor::select('id', 'nip', 'name')->get();
        $applicationTrashedCount = Application::onlyTrashed()->count();

        if(request()->ajax()) {
            return datatables()->of($application)
            ->addIndexColumn()
            ->addColumn('patient', fn($model) => $model->patients ? $model->patients->name : 'No patient available')
            ->addColumn('doctor', fn($model) => $model->doctors ? $model->doctors->name : 'No doctor available')
            ->addColumn('admin', fn($model) => $model->users ? $model->users->name : 'No admin available')
            ->addColumn('status', 'application.datatable.status')
            ->addColumn('action', 'application.datatable.action')
            ->rawColumns(['status', 'action'])
            ->toJson();
        }

        return view('application.index', [
            'patients' => $patient,
            'doctors' => $doctor,
            'applicationTrashedCount' => $applicationTrashedCount,
            'repo' => $this->applicationRepository->results(),
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
        $validatedData = $request->validated();
        Application::create([
            'user_id' => Auth::id(),
            'patient_id' => $validatedData['patient_id'],
            'doctor_id' => $validatedData['doctor_id'],
            'purposes' => $validatedData['purposes'],
            'requested_at' => now(),
        ]);

        return redirect()->route('application.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request\ApplicationRequest $request
     * @param  \App\Models\Application $application
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ApplicationRequest $request, Application $application): RedirectResponse
    {
        $application->update($request->validated());
        return redirect()->route('application.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application $application
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Application $application): RedirectResponse
    {
        $application->delete();
        return redirect()->route('application.index')->with('success', 'Data berhasil dihapus!');
    }
}
