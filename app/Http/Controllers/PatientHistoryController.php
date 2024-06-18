<?php

namespace App\Http\Controllers;

use App\Contracts\HistoryInterface;
use App\Models\Patient;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PatientHistoryController extends Controller implements HistoryInterface
{
    /**
     * Display a listing of the resource.
     *
     * @return View|JsonResponse
     */
    public function index(): View|JsonResponse
    {
        $patients = Patient::select(
            'id', 'name', 'gender', 'born_place', 'born_date', 'address', 'occupation'
        )
            ->orderBy('name')
            ->onlyTrashed()
            ->get();

        if (request()->ajax()) {
            return datatables()->of($patients)
                ->addIndexColumn()
                ->addColumn('born_place', fn($model) => $model->born_place . ', ' . date('d M Y', strtotime($model->born_date)))
                ->addColumn('action', 'patient.history.datatable.action')
                ->rawColumns(['born_place', 'action'])
                ->toJson();
        }

        return view('patient.history.index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function restore(int $id): RedirectResponse
    {
        Patient::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('patient.index.history')
            ->with('success', 'Data berhasil dikembalikan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        Patient::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('patient.index.history')
            ->with('success', 'Data berhasil dihapus permanen!');
    }
}
