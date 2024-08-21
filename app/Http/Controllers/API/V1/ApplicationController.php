<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResponseResource;
use App\Http\Resources\ApplicationEditResource;
use App\Http\Resources\ApplicationPrintResource;
use App\Models\Application;
use Exception;
use Illuminate\Http\JsonResponse;

class ApplicationController extends Controller
{
    public function edit(string $id): JsonResponse
    {
        try {
            $application = new ApplicationEditResource(
                Application::with(
                    'users:id,name',
                    'patients:id,name',
                    'checkup_type:id,abbreviated_word'
                )->findOrFail($id)
            );
            return ApiResponseResource::Success($application);
        } catch (Exception) {
            return ApiResponseResource::Error();
        }
    }

    public function print(string $id): JsonResponse
    {
        try {
            $application = new ApplicationPrintResource(
                Application::with(
                    'users:id,name',
                    'patients:id,name',
                    'doctors:id,name',
                    'checkup_type:id,abbreviated_word'
                )->findOrFail($id)
            );
            return ApiResponseResource::Success($application);
        } catch (Exception) {
            return ApiResponseResource::Error();
        }
    }
}
