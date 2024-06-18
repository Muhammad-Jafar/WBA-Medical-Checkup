<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdministratorHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View|JsonResponse
     */
    public function index()
    {
        $user = User::select('id', 'email', 'name', 'position', 'created_at', 'last_login', 'is_active')
            ->orderBy('position')
            ->onlyTrashed()
            ->get();

        if (request()->ajax()) {
            return datatables()->of($user)
                ->addIndexColumn()
                ->addColumn('created_at', fn($model) => monthToFullBulan($model->created_at))
                ->addColumn('last_login', fn($model) => timeAgo($model->last_login))
                ->addColumn('is_active', 'administrator.history.datatable.active')
                ->addColumn('position', 'administrator.history.datatable.position')
                ->addColumn('action', 'administrator.history.datatable.action')
                ->rawColumns(['is_active', 'position', 'action'])
                ->toJson();
        }

        return view('administrator.history.index');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param string $id
     * @return RedirectResponse
     */
    public function restore(string $id): RedirectResponse
    {
        User::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('administrator.index.history')
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
        User::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('administrator.index.history')
            ->with('success', 'Data berhasil dihapus permanen!');
    }
}
