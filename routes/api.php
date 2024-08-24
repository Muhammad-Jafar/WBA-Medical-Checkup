<?php

use App\Http\Controllers\API\V1\AdministratorController;
use App\Http\Controllers\API\V1\ApplicationController;
use App\Http\Controllers\API\V1\DashboardChartController;
use App\Http\Controllers\API\v1\DoctorController;
use App\Http\Controllers\API\V1\LoginController;
use App\Http\Controllers\API\v1\LogoutController;
use App\Http\Controllers\API\v1\PatientController;
use App\Http\Controllers\API\V1\PreferenceControlller;
use App\Http\Controllers\API\V1\CheckupTypeController;
use Illuminate\Support\Facades\Route;


/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::name('api.')->prefix('v1')->group(function () {
    Route::post('/login', [LoginController::class, 'login'])
        ->name('login');

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [LogoutController::class, 'logout'])
            ->name('logout');

        Route::get('application/{id}/edit', [ApplicationController::class, 'edit'])
            ->name('application.edit');

        Route::get('application/{id}/generate', [ApplicationController::class, 'generate'])
            ->name('application.generate');

        Route::get('patient/{id}', [PatientController::class, 'show'])
            ->name('patient.show');

        Route::get('patient/{id}/edit', [PatientController::class, 'edit'])
            ->name('patient.edit');

        Route::get('doctor/{id}/edit', [DoctorController::class, 'edit'])
            ->name('doctor.edit');

        Route::get('user/{id}/edit', [AdministratorController::class, 'edit'])
            ->name('user.edit');

        Route::get('checkup-type/{id}/edit', [CheckupTypeController::class, 'edit'])
            ->name('checkup-type.edit');

        Route::get('preference/{id}/edit', [PreferenceControlller::class, 'edit'])
            ->name('preference.edit');

        Route::get('/chart', DashboardChartController::class)
            ->name('chart');
    });

});
