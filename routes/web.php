<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/profile/{id}', [HomeController::class, 'profile'])->name('profile');
Route::get('/tours', [HomeController::class, 'tours'])->name('tours')->middleware('auth');


Route::post('/festival', [UserController::class, 'store'])->name('festival.store')->middleware('auth');
Route::delete('/festival/{id}', [UserController::class, 'destroy'])->name('festival.destroy')->middleware('auth');
