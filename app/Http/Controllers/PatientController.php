<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View|JsonResponse
     */
    public function index(): View
    {
        $patients = Patient::select('id', 'name', 'gender', 'born_place', 'born_date', 'address', 'occupation')
            ->orderBy('name')
            ->get();

        $patientTrashedCount = Patient::onlyTrashed()->count();

        if (request()->ajax()) {
            return datatables()->of($patients)
                ->addIndexColumn()
                ->addColumn('born_place', fn($model) => $model->born_place . ', ' . monthToFullBulan($model->born_date))
                ->addColumn('action', 'patient.datatable.action')
                ->rawColumns(['born_place', 'action'])
                ->toJson();
        }

        return view('patient.index', ['patientTrashedCount' => $patientTrashedCount]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PatientRequest $request
     * @return RedirectResponse
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
     * @param PatientRequest $request
     * @param Patient $patient
     * @return RedirectResponse
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
     * @param Patient $patient
     * @return RedirectResponse
     */
    public function destroy(Patient $patient): RedirectResponse
    {
        $patient->delete();
        return redirect()->route('patient.index')->with('success', 'Data berhasil dihapus!');
    }
}
