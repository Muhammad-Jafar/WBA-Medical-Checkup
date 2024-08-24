<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResponseResource;
use App\Http\Resources\PreferenceEditResource;
use App\Models\Preference;
use Exception;
use Illuminate\Http\JsonResponse;

class PreferenceControlller extends Controller
{
    public function edit(int $id): JsonResponse
    {
        try {
            $pref = new PreferenceEditResource(Preference::findOrFail($id));

            return ApiResponseResource::Success($pref);
        } catch (Exception) {
            return ApiResponseResource::Error();
        }
    }
}
