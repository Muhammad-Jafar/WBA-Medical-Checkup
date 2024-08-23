<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Print\ApplicationController;

Route::put('application/print/{id}', [ApplicationController::class, 'generate'])
    ->name('application.print');

/*Route::get('application/print/{id}', [ApplicationController::class, 'generate'])
    ->name('application.print');*/
