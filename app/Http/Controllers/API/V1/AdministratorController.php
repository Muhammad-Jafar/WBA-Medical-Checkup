<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdministratorEditResource;
use App\Http\Resources\ApiResponseResource;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;

class AdministratorController extends Controller
{
    public function edit(int $id): JsonResponse
    {
        try {
            $admin = new AdministratorEditResource(User::findOrFail($id));

            return ApiResponseResource::Success($admin);
        } catch (Exception) {
            return ApiResponseResource::Error();
        }
    }
}
