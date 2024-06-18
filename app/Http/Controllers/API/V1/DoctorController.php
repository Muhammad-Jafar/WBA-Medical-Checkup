<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResponseResource;
use App\Http\Resources\DoctorEditResource;
use App\Models\Doctor;
use Exception;
use Illuminate\Http\JsonResponse;

class DoctorController extends Controller
{
    public function edit(int $id): JsonResponse
    {
        try {
            $doctor = new DoctorEditResource(Doctor::findOrFail($id));

            return ApiResponseResource::Success($doctor);
        } catch (Exception) {
            return ApiResponseResource::Error();
        }
    }
}
