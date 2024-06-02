<?php

namespace App\Http\Controllers;

use App\Http\Requests\PreferenceRequest;
use App\Models\Preference;
use Illuminate\Http\RedirectResponse;

class PreferenceController extends Controller
{
    public function index()
    {
        $preference = Preference::select('id', 'id_preferences', 'name', 'desc', 'status', 'input')
            ->get();

        return view('preference.index', ['preference' => $preference,]);
    }

    /**
     * Edit daily limit of applicant
     *
     * @param PreferenceRequest $request
     * @param Preference $preference
     * @return RedirectResponse
     */
    public function editDailyLimit(PreferenceRequest $request, Preference $preference): RedirectResponse
    {
        $preference->update(['input' => $request->inputan]);
        return redirect()->route('preference.index')->with('success', 'Data berhasil disimpan');
    }

}
