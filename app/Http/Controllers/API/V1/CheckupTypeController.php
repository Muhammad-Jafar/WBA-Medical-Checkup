<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResponseResource;
use App\Http\Resources\CheckupTypeEditResource;
use App\Models\CheckupType;
use Exception;
use Illuminate\Http\JsonResponse;

class CheckupTypeController extends Controller
{
    public function edit(int $id): JsonResponse
    {
        try {
            $checkupType = new CheckupTypeEditResource(CheckupType::findOrFail($id));

            return ApiResponseResource::Success($checkupType);
        }catch (Exception){
            return ApiResponseResource::Error();
        }
    }
}
