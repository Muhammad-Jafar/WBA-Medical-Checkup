<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Repositories\DashboardChartRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class DashboardChartController extends Controller
{
    public function __construct(
        private DashboardChartRepository $dashboardChartRepository,
    ) {
    }

    public function __invoke(): JsonResponse
    {
        $data = $this->dashboardChartRepository->applicantPerMonths();

        Log::error($data);

        return response()->json([
            'code' => Response::HTTP_OK,
            'data' => $data,
        ]);
    }
}
