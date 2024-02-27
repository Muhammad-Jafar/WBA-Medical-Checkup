<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ApplicationController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index():View|JsonResponse
    {
        $application = Application::select('request_by', 'handle_by', 'purposes', 'status')
        ->orderBy('created_at')
        ->get();

        if(request()->ajax()) {
            return datatables()->of($application)
            ->addIndexColumn()
            ->addColumn('status', 'application.datatable.status')
            ->addColumn('action', 'application.datatable.action')
            ->rawColumns(['status', 'action'])
            ->toJson();
        }

        $applicationTrashedCount = Application::onlyTrashed()->count();

        return view('applications.index', [
            'applicationTrashedCount' => $applicationTrashedCount,
        ]);
    }


}
