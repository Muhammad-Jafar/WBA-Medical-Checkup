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
        $application = Application::select('id','user_id', 'doctor_id', 'patient_id', 'purposes', 'status')
        ->with('users:id,name', 'patients:id,name', 'doctors:id,name')
        ->orderBy('created_at')
        ->get();

        $patients = Patient::select('id', 'nik', 'name')->get();
        $doctors = Doctor::select('id', 'nip', 'name')->get();

        if(request()->ajax()) {
            return datatables()->of($application)
            ->addIndexColumn()
            ->addColumn('status', 'application.datatable.status')
            ->addColumn('action', 'application.datatable.action')
            ->rawColumns(['status', 'action'])
            ->toJson();
        }

        $applicationTrashedCount = Application::onlyTrashed()->count();

        return view('application.index', [
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
