<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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



Route::get('/', [CarController::class, "index"])->middleware(['auth'])->name('index');
Route::get("/new-car", [CarController::class, "create"])->middleware(['auth'])->name('create');
Route::post("/store-car", [CarController::class, "store"])->middleware(['auth'])->name('store');
Route::get("/edit-car/{id}", [CarController::class, "edit"])->middleware(['auth'])->name('edit');
Route::post("/update-car", [CarController::class, "update"])->middleware(['auth'])->name('update');
Route::get("/delete-car/{id}", [CarController::class, "destroy"])->middleware(['auth'])->name('destroy');
Route::get("/logout", [AuthenticatedSessionController::class, "destroy"])->middleware(['auth'])->name('logout');



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
