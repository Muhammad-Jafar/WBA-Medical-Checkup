<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Requests\PatientRequest;
use App\Http\Resources\PatientShowResource;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(): View|JsonResponse
    {
        $patients = Patient::select(
            'id', 'name', 'gender', 'born_place', 'born_date', 'address', 'occupation'
        )
        ->orderBy('name')
        ->get();

        if(request()->ajax()) {
            return datatables()->of($patients)
            ->addIndexColumn()
            ->addColumn('born_place', fn($model) => $model->born_place . ', ' . date('d M Y', strtotime($model->born_date)))
            ->addColumn('action', 'patient.datatable.action')
            ->rawColumns(['born_place', 'action'])
            ->toJson();
        }

        $patientTrashedCount = Patient::onlyTrashed()->count();

        return view('patient.index', ['patientTrashedCount' => $patientTrashedCount]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PatientRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PatientRequest $request): RedirectResponse
    {
        $patient = $request->validated();
        $patient['born_date'] = reverseDate($patient['born_date']);
        Patient::create($patient);
        
        return redirect()->route('patient.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request\PatientRequest $request
     * @param  \App\Models\Patient $patient
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PatientRequest $request, Patient $patient): RedirectResponse
    {
        $data = $request->validated();
        $data['born_date'] = reverseDate($data['born_date']);
        $patient->update($data);
        return redirect()->route('patient.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient $patient
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Patient $patient): RedirectResponse
    {
        $patient->delete();
        return redirect()->route('patient.index')->with('success', 'Data berhasil dihapus!');
    }
}
