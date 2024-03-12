<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ApplicationHistoryController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientHistoryController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorHistoryController;
use App\Http\Controllers\CheckupTypeController;
use App\Http\Controllers\CheckTypeHistoryController;
use App\Http\Controllers\AdministratorController;


require __DIR__ . '/auth.php';

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {

    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::resource('application', ApplicationController::class)->except('create', 'show', 'edit');
    Route::get('application/{tab}', [ApplicationController::class, 'getTab'])->name('application.getTab');
    Route::put('application/cancel/{id}', [ApplicationController::class, 'cancel'])->name('application.cancel');
    Route::controller(ApplicationHistoryController::class)->prefix('/application/history')->name('application.')->group(function () {
        Route::get('', 'index')->name('index.history');
        Route::post('{id}', 'restore')->name('restore.history');
        Route::delete('{id}', 'destroy')->name('destroy.history');
    });

    Route::resource('patient', PatientController::class)->except('create', 'show', 'edit');
    Route::controller(PatientHistoryController::class)->prefix('/patient/history')->name('patient.')->group(function () {
        Route::get('', 'index')->name('index.history');
        Route::post('{id}', 'restore')->name('restore.history');
        Route::delete('{id}', 'destroy')->name('destroy.history');
    });

    Route::resource('doctor', DoctorController::class)->except('create', 'show', 'edit');

    Route::controller(DoctorHistoryController::class)->prefix('/doctor/history')->name('doctor.')->group(function () {
        Route::get('', 'index')->name('index.history');
        Route::post('{id}', 'restore')->name('restore.history');
        Route::delete('{id}', 'destroy')->name('destroy.history');
    });

    // Route::group(['prefix' => 'components', 'as' => 'components.'], function() {
    //     Route::get('/alert', function () {
    //         return view('admin.component.alert');
    //     })->name('alert');
    //     Route::get('/accordion', function () {
    //         return view('admin.component.accordion');
    //     })->name('accordion');
    // });

    Route::resource('checkup-type', CheckupTypeController::class)->except('create', 'show', 'edit');
    Route::controller(CheckTypeHistoryController::class)->prefix('/checkup-type/history')->name('checkup-type.')->group(function () {
        Route::get('', 'index')->name('index.history');
        Route::post('{id}', 'restore')->name('restore.history');
        Route::delete('{id}', 'destroy')->name('destroy.history');
    });

    Route::resource('administrator', AdministratorController::class)->except('create', 'show', 'edit');

    Route::get('settings', function () {
        return view('settings.settings');
    })->name('settings');

});
