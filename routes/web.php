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

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'processLogin']);

Route::get('/dashboard', [AuthController::class, 'showDashboard']);
Route::post('/dashboard', [AuthController::class, 'processDashboard']);

Route::get('/student/menu', [AuthController::class, 'showMenu']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/', [DashboardController::class, 'index']);