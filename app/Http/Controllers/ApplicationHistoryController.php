<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ApplicationHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View|JsonResponse
     */
    public function index()
    {
        $application = Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')
            ->select('id', 'user_id', 'patient_id', 'doctor_id', 'purposes', 'status')
            ->onlyTrashed()
            ->get();

        if (request()->ajax()) {
            return datatables()->of($application)
                ->addIndexColumn()
                ->addColumn('patient', fn($model) => $model->patients->name)
                ->addColumn('doctor', fn($model) => $model->doctors->name)
                ->addColumn('admin', fn($model) => $model->users->name)
                ->addColumn('status', 'application.history.datatable.status')
                ->addColumn('action', 'application.history.datatable.action')
                ->rawColumns(['status', 'action'])
                ->toJson();
        }

        return view('application.history.index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param string $id
     * @return RedirectResponse
     */
    public function restore(string $id): RedirectResponse
    {
        Application::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('application.index.history')
            ->with('success', 'Data berhasil dikembalikan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        Application::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('application.index.history')
            ->with('success', 'Data berhasil dihapus permanen!');
    }

}
