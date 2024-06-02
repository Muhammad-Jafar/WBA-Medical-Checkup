<?php

namespace App\Http\Controllers\API\V1;

use App\Models\CheckupType;
use App\Contracts\ApiInterface;
use App\Http\Controllers\Controller;
use App\Http\Resources\CheckupTypeEditResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CheckupTypeController extends Controller implements ApiInterface
{
    public function show(int $id): JsonResponse
    {
        return response()->json([
            'code' => Response::HTTP_OK,
            'data' => ['message' => 'No function found']
        ]);
    }

    public function edit(int $id): JsonResponse
    {
        $doctor = new CheckupTypeEditResource(CheckupType::findOrFail($id));

        return response()->json([
            'code' => Response::HTTP_OK,
            'data' => $doctor
        ]);
    }
}
