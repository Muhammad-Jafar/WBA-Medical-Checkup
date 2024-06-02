<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Application;
use App\Http\Controllers\Controller;
use App\Http\Resources\ApplicationEditResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ApplicationController extends Controller
{
    public function edit(string $id): JsonResponse
    {
        $application = new ApplicationEditResource(
            Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')
                ->findOrFail($id)
        );

        return response()->json([
            'code' => Response::HTTP_OK,
            'data' => $application
        ]);
    }
}
