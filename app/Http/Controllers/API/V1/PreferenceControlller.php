<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Preference;
use App\Http\Controllers\Controller;
use App\Http\Resources\PreferenceEditResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PreferenceControlller extends Controller
{
    public function edit(int $id): JsonResponse
    {
        $pref = new PreferenceEditResource(Preference::findOrFail($id));
        
        return response()->json([
            'code' => Response::HTTP_OK,
            'data' => $pref
        ]);
    }
}
