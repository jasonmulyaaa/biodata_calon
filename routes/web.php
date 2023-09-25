<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('panel')->middleware('guest');
Route::post('/', [LoginController::class, 'authentication'])->name('authentication');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/register', RegisterController::class);
Route::resource('/biodata', BiodataController::class)->middleware('auth');
Route::resource('/dashboard', DashboardController::class)->middleware(['auth', 'admin']);