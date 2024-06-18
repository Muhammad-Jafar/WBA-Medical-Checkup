<?php

namespace App\Http\Controllers;


use App\Http\Requests\AdministratorStoreRequest;
use App\Http\Requests\AdministratorUpdateRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

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

        $adminTrashed = User::onlyTrashed()->count();

        if (request()->ajax()) {
            return datatables()->of($user)
                ->addIndexColumn()
                ->addColumn('created_at', fn($model) => monthToFullBulan($model->created_at))
                ->addColumn('last_login', fn($model) => timeAgo($model->last_login))
                ->addColumn('is_active', 'administrator.datatable.active')
                ->addColumn('position', 'administrator.datatable.position')
                ->addColumn('action', 'administrator.datatable.action')
                ->rawColumns(['is_active', 'position', 'action'])
                ->toJson();
        }

        return view('administrator.index', ['adminTrashed' => $adminTrashed]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AdministratorStoreRequest $request
     * @return RedirectResponse
     */
    public function store(AdministratorStoreRequest $request): RedirectResponse
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'position' => $request->position,
            'email_verified_at' => now(),
            'remember_token' => Str::random(20)
        ])->assignRole($request->position);

        return redirect()->route('user.index')
            ->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdministratorUpdateRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(AdministratorUpdateRequest $request, User $user): RedirectResponse
    {
        $user->removeRole($user->position)
            ->assignRole($request->position)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => is_null($request->password) ? $user->password : bcrypt($request->password),
                'position' => $request->position,
            ]);

        return redirect()->route('user.index')
            ->with('success', 'Data berhasil diubah!');
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
        return redirect()->route('user.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
