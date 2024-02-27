<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {

    Route::get('/dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');

    Route::resource('application', \App\Http\Controllers\ApplicationController::class)->except('create', 'show', 'edit');

    Route::resource('patient', \App\Http\Controllers\PatientController::class)->except('create', 'show', 'edit');

    Route::controller(\App\Http\Controllers\PatientHistoryController::class)->prefix('/patient/history')->name('patient.')->group(function () {
        Route::get('', 'index')->name('index.history');
        Route::post('{id}', 'restore')->name('restore.history');
        Route::delete('{id}', 'destroy')->name('destroy.history');
    });

    Route::resource('doctor', \App\Http\Controllers\DoctorController::class)->except('create', 'show', 'edit');

    Route::controller(\App\Http\Controllers\DoctorHistoryController::class)->prefix('/doctor/history')->name('doctor.')->group(function () {
        Route::get('', 'index')->name('index.history');
        Route::post('{id}', 'restore')->name('restore.history');
        Route::delete('{id}', 'destroy')->name('destroy.history');
    });

    // Route::group(['prefix' => 'master', 'as' => 'master.'], function() {
    //     Route::get('/pasien', function () {
    //         return view('patient.patient');
    //     })->name('patient');
    //     Route::get('/dokter', function () {
    //         return view('doctor.doctor');
    //     })->name('doctor');
    // });

    Route::group(['prefix' => 'components', 'as' => 'components.'], function() {
        Route::get('/alert', function () {
            return view('admin.component.alert');
        })->name('alert');
        Route::get('/accordion', function () {
            return view('admin.component.accordion');
        })->name('accordion');
    });

    Route::get('/settings', function () {
        return view('settings.settings');
    })->name('settings');

});
