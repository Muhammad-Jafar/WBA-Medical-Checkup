<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
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
        $doctors = Doctor::select('id', 'name', 'nip', 'sip')->orderBy('name')->get();

        if(request()->ajax()) {
            return datatables()->of($doctors)
            ->addIndexColumn()
            ->addColumn('verified', 'doctor.datatable.verified')
            ->addColumn('action', 'doctor.datatable.action')
            ->rawColumns(['verified', 'action'])
            ->toJson();
        }    

        return view('doctor.doctor');
    }
}
