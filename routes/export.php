<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Export\ApplicationController;

Route::get('application/generate', ApplicationController::class)->name('application.generate');