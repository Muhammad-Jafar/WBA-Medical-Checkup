<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Export\ApplicationController;

Route::get('application/export', ApplicationController::class)->name('application.export');