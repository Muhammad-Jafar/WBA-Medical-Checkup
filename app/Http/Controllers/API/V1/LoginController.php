<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            $token = auth()->user()->createToken('personal-access-token', expiresAt: now()->addDay())
                ->plainTextToken;

            return response()->json([
                'code' => Response::HTTP_OK,
                'message' => 'Success',
                'token' => $token
            ]);
        } else {
            return response()->json([
                'code' => Response::HTTP_UNAUTHORIZED,
                'message' => 'Unathorized'
            ]);
        }
    }
}
