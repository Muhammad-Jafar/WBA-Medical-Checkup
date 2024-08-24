<?php

use App\Http\Controllers\Print\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('application/print/{id}', [ApplicationController::class, 'print'])
    ->name('application.print');
