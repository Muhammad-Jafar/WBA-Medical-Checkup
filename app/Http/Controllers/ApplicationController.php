<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Application;
use App\Models\CheckupType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ApplicationRequest;
use App\Repositories\ApplicationRepository;

class ApplicationController extends Controller
{
    private $applicationRepository;

    public function __construct(ApplicationRepository $applicationRepository)
    {
        $this->applicationRepository = $applicationRepository;
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
        ->whereDate('created_at', now()->toDateString())
        ->get();

        $patient = Patient::select('id', 'nik', 'name')->get();
        $doctor = Doctor::select('id', 'nip', 'name')->get();
        $applicationTrashedCount = Application::onlyTrashed()->count();
        $checkupType = CheckupType::select('id','name','abbreviated_word')->get();

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
            'checkupType' => $checkupType,
            'repo' => $this->applicationRepository->results(),
        ]);
    }

    public function getTab($tab)
    {
        $application = Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')
        ->select('id','user_id', 'patient_id', 'doctor_id', 'purposes', 'status')
        ->latest();

        if($tab == 'today') {
            $application->whereDate('created_at', now()->toDateString())->get();
        } elseif ($tab === 'pending') {
            $application->where('status', 'pending')->get();
        } else {
            $application->get();
        }

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

        return response()->json($application);
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
            'height_body' => $validatedData['height_body'],
            'mass_body' => $validatedData['mass_body'],
            'blod_type' => $validatedData['blod_type'],
            'blod_pressure' => $validatedData['blod_pressure'],
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

    /**
     * Update specified field from table.
     *
     * @param  string $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cancel(string $id): RedirectResponse
    {
        Application::findOrFail($id)
        ->update([
            'status' => 'REJECTED',
            'rejected_at' => now(),
    ]);
        return redirect()->route('application.index')->with('success', 'Permintaan berhasil dibatalkan!');
    }
}
