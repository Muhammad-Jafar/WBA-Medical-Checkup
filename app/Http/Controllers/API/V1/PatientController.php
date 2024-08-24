<?php

namespace App\Http\Controllers\API\V1;

use App\Contracts\ApiInterface;
use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResponseResource;
use App\Http\Resources\PatientEditResource;
use App\Http\Resources\PatientShowResource;
use App\Models\Patient;
use Exception;
use Illuminate\Http\JsonResponse;

class PatientController extends Controller implements ApiInterface
{
    public function show(string $id): JsonResponse
    {
        try {
            $patient = new PatientShowResource(Patient::findOrFail($id));
            return ApiResponseResource::Success($patient);
        } catch (Exception) {
            return ApiResponseResource::Error();
        }
    }

    public function edit(string $id): JsonResponse
    {
        try {
            $patient = new PatientEditResource(Patient::findOrFail($id));
            return ApiResponseResource::Success($patient);
        } catch (Exception) {
            return ApiResponseResource::Error();
        }
    }
}
