<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    Route::get("/movies", [MovieController::class, 'index'])->name('movie.index');
    Route::get("/movies/create", [MovieController::class, 'create'])->name('movie.create');
    Route::post("/movies/store", [MovieController::class, 'store'])->name('movie.store');
    Route::get("/movies/edit/{id}", [MovieController::class, 'edit'])->name('movie.edit');
    Route::post("/movies/update/{id}", [MovieController::class, 'update'])->name('movie.update');
    Route::get("/movies/delete/{id}", [MovieController::class, 'destroy'])->name('movie.delete');
});
