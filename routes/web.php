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

// ROUTE LOGIN & LOGOUT
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

// ROUTE DASHBOARD
Route::get('/dashboard', [AuthController::class, 'showDashboard']);
Route::get('/dashboard/student', [AuthController::class, 'showStudentDashboard']);
Route::get('/dashboard/teacher', [AuthController::class, 'showTeacherDashboard'])->name('dashboard.teacher');
Route::post('/dashboard/student', [AuthController::class, 'processDashboard']);
Route::post('/dashboard/teacher', [AuthController::class, 'processDashboard']);

// MENU MAHASISWA, DOSEN, ADMIN
Route::get('/mahasiswa/menu', [AuthController::class, 'showMenu']);
Route::get('/dosen/menu', [AuthController::class, 'showDosenMenu'])->name('dosen.menu');
Route::get('/admin/menu', [AuthController::class, 'showAdminMenu']);



