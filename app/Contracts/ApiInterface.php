<?php

namespace App\Contracts;

use Illuminate\Http\JsonResponse;

/**
 * Interface for RESTful API feature.
 */
interface ApiInterface
{
    public function show(string $id): JsonResponse;

    public function edit(string $id): JsonResponse;
}
