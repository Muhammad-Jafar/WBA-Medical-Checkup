<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use App\Contracts\HistoryInterface;
use Illuminate\Http\RedirectResponse;

class DoctorHistoryController extends Controller implements HistoryInterface
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

        return view('doctor.history.index');
    }

     /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(int $id): RedirectResponse
    {
        Doctor::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('doctor.index.history')->with('success', 'Data berhasil dikembalikan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $doctor = Doctor::onlyTrashed()->findOrFail($id);
        $doctor->forceDelete();

        return redirect()->route('doctor.index.history')->with('success', 'Data berhasil dihapus permanen!');
    }

}
