<?php

namespace App\Http\Controllers;

use App\Http\Requests\PreferenceRequest;
use App\Models\Preference;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\RedirectResponse;

class PreferenceController extends Controller
{
    public function index(): View|JsonResponse
    {
        $preference = Preference::select('id', 'id_preferences', 'name', 'desc', 'status', 'input')->get();

        return view('preference.index', [
            'preference' => $preference,
        ]);
    }

    /**
     * Edit daily limit of applicant
     * 
     * @param \App\Http\Requests\PreferenceRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editDailyLimit(PreferenceRequest $request, Preference $preference): RedirectResponse
    {
        $preference->update(['input' => $request->inputan]);
        return redirect()->route('preference.index')->with('success', 'Data berhasil disimpan');
    }



}
