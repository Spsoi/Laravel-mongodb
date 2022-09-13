<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('welcome');
});

Route::get('user/device/get', [App\Http\Controllers\DevicesController::class, 'show']);
Route::post('user/device/add', [App\Http\Controllers\DevicesController::class, 'store']);
Route::resource('user/devices/state/{device_id}/get', App\Http\Controllers\DeviceStateController::class);
Route::post('user/devices/state/{device_id}/set', [App\Http\Controllers\DeviceStateController::class, 'store']);