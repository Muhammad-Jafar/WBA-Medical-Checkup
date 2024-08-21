<?php

namespace App\Contracts;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/**
 * Interface untuk soft delete.
 */
interface HistoryInterface
{
    public function index(): View|JsonResponse;
    public function restore(string $id): RedirectResponse;
    public function destroy(string $id): RedirectResponse;
}
