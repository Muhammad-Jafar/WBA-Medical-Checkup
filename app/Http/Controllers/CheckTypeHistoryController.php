<?php

namespace App\Http\Controllers;

use App\Models\CheckupType;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CheckTypeHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View|JsonResponse
     */
    public function index()
    {
        $checkupType = CheckupType::select('id', 'name', 'abbreviated_word', 'description')
            ->orderBy('name')
            ->onlyTrashed()
            ->get();

        if (request()->ajax()) {
            return datatables()->of($checkupType)
                ->addIndexColumn()
                ->addColumn('abbreviated_word', 'checkup_type.history.datatable.abbreviated_word')
                ->addColumn('action', 'checkup_type.history.datatable.action')
                ->rawColumns(['abbreviated_word', 'action'])
                ->toJson();
        }

        return view('checkup_type.history.index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function restore(int $id): RedirectResponse
    {
        CheckupType::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('checkup-type.index.history')
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
        CheckupType::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('checkup-type.index.history')
            ->with('success', 'Data berhasil dihapus permanen!');
    }
}
