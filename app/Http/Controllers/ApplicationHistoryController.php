<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ApplicationHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(): View|JsonResponse
    {
        $application = Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')
        ->select('id','user_id', 'patient_id', 'doctor_id', 'purposes', 'status')
        ->onlyTrashed()
        ->get();

        if(request()->ajax()) {
            return datatables()->of($application)
            ->addIndexColumn()
            ->addColumn('patient', fn($model) => $model->patients ? $model->patients->name : 'No patient available')
            ->addColumn('doctor', fn($model) => $model->doctors ? $model->doctors->name : 'No doctor available')
            ->addColumn('admin', fn($model) => $model->users ? $model->users->name : 'No admin available')
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
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(string $id): RedirectResponse
    {
        Application::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('application.index.history')->with('success', 'Data berhasil dikembalikan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        $application = Application::onlyTrashed()->findOrFail($id);
        $application->forceDelete();

        return redirect()->route('application.index.history')->with('success', 'Data berhasil dihapus permanen!');
    }

}
