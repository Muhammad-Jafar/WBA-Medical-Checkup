<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{
    public function __invoke(): View
    {
        $preference = Preference::select('id_preferences', 'name', 'desc', 'status', 'input')->get();
        Log::info($preference);

        return view('settings.index', [
            'preference' => $preference,
        ]);
    }
}
