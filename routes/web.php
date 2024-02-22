<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});
Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/permintaan', function () {
        return view('livewire.permintaan.permintaan');
    })->name('permintaan');

    Route::group(['prefix' => 'master', 'as' => 'master.'], function() {
        Route::get('/pasien', function () {
            return view('patient.patient');
        })->name('patient');
        Route::get('/dokter', function () {
            return view('doctor.doctor');
        })->name('doctor');
    });

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
