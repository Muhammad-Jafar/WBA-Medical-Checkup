<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\DoctorRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
        public function index(): View|JsonResponse
    {
        $doctors = Doctor::select('id', 'name', 'nip', 'sip', 'verified')
        ->orderBy('name')
        ->get();

        if(request()->ajax()) {
            return datatables()->of($doctors)
            ->addIndexColumn()
            ->addColumn('verified', 'doctor.datatable.verified')
            ->addColumn('action', 'doctor.datatable.action')
            ->rawColumns(['verified', 'action'])
            ->toJson();
        }

        $doctorTrashedCount = Doctor::onlyTrashed()->count();

        return view('doctor.index', ['doctorTrashedCount' => $doctorTrashedCount]); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\DoctorRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(DoctorRequest $request): RedirectResponse
    {
        Doctor::create($request->validated());
        return redirect()->route('doctor.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request\DoctorRequest $request
     * @param  \App\Models\Doctor $doctor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(DoctorRequest $request, Doctor $doctor): RedirectResponse
    {
        $doctor->update($request->validated());
        return redirect()->route('doctor.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor $doctor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Doctor $doctor): RedirectResponse
    {
        $doctor->delete();
        return redirect()->route('doctor.index')->with('success', 'Data berhasil dihapus!');
    }
}
