<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResponseResource;
use App\Http\Resources\ApplicationEditResource;
use App\Http\Resources\ApplicationPrintOnlineResource;
use App\Models\Application;
use Exception;
use Illuminate\Http\JsonResponse;

class ApplicationController extends Controller
{
    public function edit(string $id): JsonResponse
    {
        try {
            $application = new ApplicationEditResource(
                Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')
                    ->findOrFail($id)
            );

            return ApiResponseResource::Success($application);

        } catch (Exception) {
            return ApiResponseResource::Error();
        }
    }

    public function printOnline(string $id): JsonResponse
    {
        try {
            $application = new ApplicationPrintOnlineResource(
                Application::with('users:id,name', 'patients:id,name')
                    ->findOrFail($id)
            );
            return ApiResponseResource::Success($application);
        } catch (Exception) {
            return ApiResponseResource::Error();
        }
    }
}
