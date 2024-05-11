<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdministratorEditResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AdministratorController extends Controller
{
    public function edit(int $id): JsonResponse
    {
        $admin = new AdministratorEditResource(User::findOrFail($id));

        return response()->json([
            'code' => Response::HTTP_OK,
            'data' => $admin
        ]);
    }
}
