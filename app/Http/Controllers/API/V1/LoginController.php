<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResponseResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        if (auth()->attempt($request->only('email', 'password'))) {
            $token = $request->user()->createToken('personal-access-token', expiresAt: now()->addDay())
                ->plainTextToken;

            return ApiResponseResource::Success($token);
        } else {
            return response()->json([
                'code' => Response::HTTP_UNAUTHORIZED,
                'message' => 'Email or password invalid'
            ]);
        }
    }
}
