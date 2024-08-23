<?php

use App\Http\Controllers\Print\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::put('application/print/{id}', [ApplicationController::class, 'print'])
    ->name('application.print');
