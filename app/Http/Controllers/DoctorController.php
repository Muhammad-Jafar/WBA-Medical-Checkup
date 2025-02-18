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
     * @return View|JsonResponse
     */
    public function index()
    {
        $doctors = Doctor::select('id', 'name', 'nip', 'sip', 'verified')
            ->orderBy('name')
            ->get();
        $doctorTrashedCount = Doctor::onlyTrashed()->count();

        if (request()->ajax()) {
            return datatables()->of($doctors)
                ->addIndexColumn()
                ->addColumn('verified', 'doctor.datatable.verified')
                ->addColumn('action', 'doctor.datatable.action')
                ->rawColumns(['verified', 'action'])
                ->toJson();
        }

        return view('doctor.index', ['doctorTrashedCount' => $doctorTrashedCount]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DoctorRequest $request
     * @return RedirectResponse
     */
    public function store(DoctorRequest $request): RedirectResponse
    {
        Doctor::create($request->validated());
        return redirect()->route('doctor.index')
            ->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DoctorRequest $request
     * @param Doctor $doctor
     * @return RedirectResponse
     */
    public function update(DoctorRequest $request, Doctor $doctor): RedirectResponse
    {
        $doctor->update($request->validated());
        return redirect()->route('doctor.index')
            ->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Doctor $doctor
     * @return RedirectResponse
     */
    public function destroy(Doctor $doctor): RedirectResponse
    {
        $doctor->delete();
        return redirect()->route('doctor.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
