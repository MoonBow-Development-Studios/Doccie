<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//|--------------------------------------------------------------------------
//| SESSIONS
//|--------------------------------------------------------------------------
Route::get('/login', [SessionController::class, 'login'])->name('login');
Route::get('/register', [SessionController::class, 'register'])->name('register');
Route::get('/logout', [SessionController::class, 'destroy'])->name('logout');

//|--------------------------------------------------------------------------
//| ADMIN PANEL
//|--------------------------------------------------------------------------

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.index')->middleware('role:admin');

//|--------------------------------------------------------------------------
//| APPLICATION
//|--------------------------------------------------------------------------

Route::get('/', [AppController::class, 'index'])->name('app.index')->middleware('auth');
