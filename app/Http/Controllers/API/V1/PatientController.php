<?php

namespace App\Http\Controllers\API\v1;

use App\Models\Patient;
use App\Contracts\ApiInterface;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientEditResource;
use App\Http\Resources\PatientShowResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PatientController extends Controller implements ApiInterface
{
    public function show(int $id): JsonResponse
    {
        $patient = new PatientShowResource(Patient::findOrFail($id));
        
        return response()->json([
            'code' => Response::HTTP_OK,
            'data' => $patient
        ]);
    }

    public function edit(int $id): JsonResponse
    {
        $patient = new PatientEditResource(Patient::findOrFail($id));
        
        return response()->json([
            'code' => Response::HTTP_OK,
            'data' => $patient
        ]);
    }
}