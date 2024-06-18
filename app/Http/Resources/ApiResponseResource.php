<?php

namespace App\Http\Resources;

use Symfony\Component\HttpFoundation\Response;

class ApiResponseResource
{
    public static function Success($data)
    {
        return response()->json([
            'code' => Response::HTTP_OK,
            'message' => "Fetch data success",
            'data' => $data
        ]);
    }

    public static function Error()
    {
        return response()->json([
            'code' => Response::HTTP_NOT_FOUND,
            'message' => "No data found",
        ]);
    }
}
