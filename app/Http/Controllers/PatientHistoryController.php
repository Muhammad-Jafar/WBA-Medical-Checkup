<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use App\Contracts\HistoryInterface;
use Illuminate\Http\RedirectResponse;

class PatientHistoryController extends Controller implements HistoryInterface
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(): View|JsonResponse
    {
        $doctors = Patient::select(
            'id', 'name', 'gender', 'born_place', 'born_date', 'address', 'occupation'
        )
        ->orderBy('name')
        ->onlyTrashed()
        ->get();

        if(request()->ajax()) {
            return datatables()->of($doctors)
            ->addIndexColumn()
            ->addColumn('verified', 'doctor.history.datatable.verified')
            ->addColumn('action', 'doctor.history.datatable.action')
            ->rawColumns(['verified', 'action'])
            ->toJson();
        }

        return view('patient.history.index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(int $id): RedirectResponse
    {
        Patient::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('patient.index.history')->with('success', 'Data berhasil dikembalikan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $patient = Patient::onlyTrashed()->findOrFail($id);
        $patient->forceDelete();

        return redirect()->route('patient.index.history')->with('success', 'Data berhasil dihapus permanen!');
    }
}
