<?php

namespace App\Http\Controllers\API\v1;

use App\Models\Doctor;
use App\Contracts\ApiInterface;
use App\Http\Controllers\Controller;
use App\Http\Resources\DoctorEditResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DoctorController extends Controller implements ApiInterface
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
        $doctor = new DoctorEditResource(Doctor::findOrFail($id));
        
        return response()->json([
            'code' => Response::HTTP_OK,
            'data' => $doctor
        ]);
    }
}
