<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

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
            )->orderBy('name')->get();

        if(request()->ajax()) {
            return datatables()->of($patients)
            ->addIndexColumn()
            ->addColumn('born_place', fn($model) => $model->born_place . ', ' . date('d M Y', strtotime($model->born_date)))
            ->addColumn('action', 'patient.datatable.action')
            ->rawColumns(['gender', 'action'])
            ->toJson();
        }

        return view('patient.index');
    }
}
