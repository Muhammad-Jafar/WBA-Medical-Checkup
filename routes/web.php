<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AdministratorHistoryController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ApplicationHistoryController;
use App\Http\Controllers\CheckTypeHistoryController;
use App\Http\Controllers\CheckupTypeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorHistoryController;
use App\Http\Controllers\Google\SheetsController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientHistoryController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::redirect('/', 'login');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/sheet', [SheetsController::class, 'sync'])->name('sheet');

    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::resource('application', ApplicationController::class)
        ->except('create', 'show', 'edit');
    Route::resource('patient', PatientController::class)
        ->except('create', 'show', 'edit');
    Route::resource('doctor', DoctorController::class)
        ->except('create', 'show', 'edit');
    Route::resource('user', AdministratorController::class)
        ->except('create', 'show', 'edit');
    Route::resource('checkup-type', CheckupTypeController::class)
        ->except('create', 'show', 'edit');

    Route::get('/report', ReportController::class)->name('report');

    Route::controller(ApplicationHistoryController::class)->prefix('/application/history')
        ->name('application.')->group(function () {
            Route::get('', 'index')->name('index.history');
            Route::post('{id}', 'restore')->name('restore.history');
            Route::delete('{id}', 'destroy')->name('destroy.history');
        });

    Route::controller(ApplicationController::class)->prefix('/application')
        ->name('application.')->group(function () {
            Route::get('/{tab}', 'tab')->name('tab');
            Route::put('/cancel/{id}', 'cancel')->name('cancel');
            Route::put('/undo/{id}', 'undo')->name('undo');
            Route::put('/approve/{id}', 'approve')->name('approve');
        });

    Route::controller(PatientHistoryController::class)->prefix('/patient/history')
        ->name('patient.')->group(function () {
            Route::get('', 'index')->name('index.history');
            Route::post('{id}', 'restore')->name('restore.history');
            Route::delete('{id}', 'destroy')->name('destroy.history');
        });

    Route::controller(DoctorHistoryController::class)->prefix('/doctor/history')
        ->name('doctor.')->group(function () {
            Route::get('', 'index')->name('index.history');
            Route::post('{id}', 'restore')->name('restore.history');
            Route::delete('{id}', 'destroy')->name('destroy.history');
        });

    Route::controller(AdministratorHistoryController::class)->prefix('/administrator/history')
        ->name('administrator.')->group(function () {
            Route::get('', 'index')->name('index.history');
            Route::post('{id}', 'restore')->name('restore.history');
            Route::delete('{id}', 'destroy')->name('destroy.history');
        });

    Route::controller(CheckTypeHistoryController::class)->prefix('/checkup-type/history')
        ->name('checkup-type.')->group(function () {
            Route::get('', 'index')->name('index.history');
            Route::post('{id}', 'restore')->name('restore.history');
            Route::delete('{id}', 'destroy')->name('destroy.history');
        });

    Route::controller(PreferenceController::class)->prefix('/preference')
        ->name('preference.')->group(function () {
            Route::get('', 'index')->name('index');
            Route::put('editDailyLimit/{preference}', 'editDailyLimit')->name('editDailyLimit');
        });

    require __DIR__ . '/export.php';
    require __DIR__ . '/print.php';
});
