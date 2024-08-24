<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResponseResource;
use App\Repositories\DashboardChartRepository;
use Exception;
use Illuminate\Http\JsonResponse;

class DashboardChartController extends Controller
{
    public function __construct(
        private readonly DashboardChartRepository $dashboardChartRepository,
    )
    {
    }

    public function __invoke(): JsonResponse
    {
        try {
            $data = $this->dashboardChartRepository->applicantPerMonths();

            return ApiResponseResource::Success($data);
        } catch (Exception) {
            return ApiResponseResource::Error();
        }
    }
}
