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
//Route for the home page
Route::get('/', [CarController::class, 'index'])->name('home');
//Route for the single page. the name is use to link the page easily
Route::get('/car/{id}', [CarController::class, 'show'])->name('single.car');

//Routes with backoffice prefix. all the routes are stack
//the name is use to link the page easily, the middleware to avoid acces by write in the adress bar

Route::prefix('backoffice')->group(function () {
    Route::get('/cars', [BackofficeCarController::class, 'index'])->name('list.car')->middleware('auth');;
    Route::get('/cars/add', [BackofficeCarController::class, 'addPage'])->name('add.car')->middleware('auth');;
    Route::post('/cars/add', [BackofficeCarController::class, 'addData'])->name('add.car')->middleware('auth');;
    Route::get('/cars/delete/{id}', [BackofficeCarController::class, 'deleteData'])->name('delete.car')->middleware('auth');;
});
//Route for the dashboard page.
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
