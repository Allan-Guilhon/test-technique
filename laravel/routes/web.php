<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Backoffice\CarController as BackofficeCarController;

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

Route::get('/', [CarController::class, 'index']);

Route::prefix('backoffice')->group(function () {
    Route::get('/cars', [BackofficeCarController::class, 'index']);
});

Route::prefix('backoffice')->group(function () {
    Route::get('/cars/add', [BackofficeCarController::class, 'add'])->name('add.car');;
});
