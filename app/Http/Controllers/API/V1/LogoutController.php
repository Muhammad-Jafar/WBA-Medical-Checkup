<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class LogoutController extends Controller
{
    public function logout()
    {
        auth()->user()->currentAccessToken()->delete();

        return response()->json([
            'code' => Response::HTTP_OK,
            'message' => 'Success to logout'
        ]);
    }
}
