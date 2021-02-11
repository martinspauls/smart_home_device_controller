<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Models\Device;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/devices', function () {
    return view('devices', ['devices' => Device::all()]);
})->middleware(['auth'])->name('devices');

Route::get('/devices/add', function () {
    return view('addDevice');
})->middleware(['auth'])->name('addDevice');

Route::post('/devices/add/', [DeviceController::class, 'store'])->middleware(['auth'])->name('device.store');

Route::delete('/devices/{id}', [DeviceController::class, 'destroy'])
->middleware(['auth'])->name('device.destroy');

Route::get('/devices/open/{id}', [DeviceController::class, 'open'])
->middleware(['auth'])->name('device.open');

Route::get('/devices/close/{id}', [DeviceController::class, 'close'])
->middleware(['auth'])->name('device.close');