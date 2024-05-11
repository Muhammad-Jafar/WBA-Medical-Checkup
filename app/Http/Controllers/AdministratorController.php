<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\AdministratorRequest;

class AdministratorController extends Controller
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
            ->get();

        if (request()->ajax()) {
            return datatables()->of($user)
                ->addIndexColumn()
                ->addColumn('created_at', fn($model) => monthToFullBulan($model->created_at))
                ->addColumn('last_login', fn($model) => timeAgo($model->last_login))
                ->addColumn('is_active', 'administrator.datatable.active')
                ->addColumn('position', 'administrator.datatable.position')
                ->addColumn('action', 'administrator.datatable.action')
                ->rawColumns(['position', 'action'])
                ->toJson();
        }

        return view('administrator.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AdministratorRequest $request
     * @return RedirectResponse
     */
    public function store(AdministratorRequest $request): RedirectResponse
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('administrator.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdministratorRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(AdministratorRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());
        return redirect()->route('administrator.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('administrator.index')->with('success', 'Data berhasil dihapus!');
    }
}
