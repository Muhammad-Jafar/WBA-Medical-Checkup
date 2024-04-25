<?php

namespace App\Http\Controllers;

use App\Models\CheckupType;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CheckupTypeRequest;

class CheckupTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(): View|JsonResponse
    {
        $checkupType = CheckupType::select('*')
        ->orderBy('name')
        ->get();

        $checkupTypeTrashedCount = CheckupType::onlyTrashed()->count();

        if(request()->ajax()) {
            return datatables()->of($checkupType)
            ->addIndexColumn()
            ->addColumn('abbreviated_word', 'checkup_type.datatable.abbreviated_word')
            ->addColumn('action', 'checkup_type.datatable.action')
            ->rawColumns(['abbreviated_word', 'action'])
            ->toJson();
        }
        
        return view('checkup_type.index', [
            'checkupTypeTrashedCount' => $checkupTypeTrashedCount,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CheckupTypeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CheckupTypeRequest $request): RedirectResponse
    {
        CheckupType::create($request->validated());
        return redirect()->route('checkup-type.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CheckupTypeRequest $request
     * @param  \App\Models\CheckupType $checkupType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CheckupTypeRequest $request, CheckupType $checkupType): RedirectResponse
    {
        $checkupType->update($request->validated());
        return redirect()->route('checkup-type.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckupType $checkupType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(CheckupType $checkupType): RedirectResponse
    {
        $checkupType->delete();
        return redirect()->route('checkup-type.index')->with('success', 'Data berhasil dihapus!');
    }
}
