<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Export\ApplicationController;
use App\Http\Controllers\Export\DoctorController;

Route::get('application/export', ApplicationController::class)->name('application.export');
Route::get('doctor/export', DoctorController::class)->name('doctor.export');
