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
     * @return \Illuminate\View\View|\Illuminate\Http\JsonResponse
     */
    public function index():View|JsonResponse
    {
        $user = User::select('id','name','email', 'created_at', 'current_team_id')
        ->orderBy('name')
        ->get();

        if(request()->ajax()) {
            return datatables()->of($user)
            ->addIndexColumn()
            ->addColumn('created_at', fn($model) => date('d M Y H:i', strtotime($model->created_at)))
            ->addColumn('team', 'administrator.datatable.team')
            ->addColumn('action', 'administrator.datatable.action')
            ->rawColumns(['team','action'])
            ->toJson();
        }

        return view('administrator.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AdministratorRequest $request
     * @return \Illuminate\Http\RedirectResponse
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
     * @param  \App\Http\Requests\AdministratorRequest $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdministratorRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());
        return redirect()->route('administrator.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('administrator.index')->with('success', 'Data berhasil dihapus!');
    }
}
