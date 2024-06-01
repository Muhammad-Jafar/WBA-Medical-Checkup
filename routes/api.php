<?php

use App\Http\Controllers\API\V1\AdministratorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\PatientController;
use App\Http\Controllers\API\v1\DoctorController;
use App\Http\Controllers\API\V1\CheckupTypeController;
use App\Http\Controllers\API\V1\ApplicationController;
use App\Http\Controllers\API\V1\PreferenceControlller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.')->prefix('v1')->group(function () {

    Route::get('application/{id}/edit', [ApplicationController::class, 'edit'])
        ->name('application.edit');

    Route::get('patient/{id}', [PatientController::class, 'show'])
        ->name('patient.show');
    Route::get('patient/{id}/edit', [PatientController::class, 'edit'])
        ->name('patient.edit');

    Route::get('doctor/{id}/edit', [DoctorController::class, 'edit'])
        ->name('doctor.edit');

    Route::get('administrator/{id}/edit', [AdministratorController::class, 'edit'])
        ->name('administrator.edit');

    /*Route::get('checkup-type/{id}/edit', [CheckupTypeController::class, 'edit'])
        ->name('checkup-type.edit');*/

    Route::get('preference/{id}/edit', [PreferenceControlller::class, 'edit'])
        ->name('preference.edit');
});
