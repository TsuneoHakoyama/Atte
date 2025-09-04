<?php

use App\Http\Controllers\AdministratorAuthenticationController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Attendance;
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

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/', [AttendanceController::class, 'index']);
});

Route::get('/admin/login', [AdministratorAuthenticationController::class, 'create']);
Route::get('/admin/attendance', [AttendanceController::class, 'adminAttendance']);
Route::get('/admin/user_list', [AttendanceController::class, 'usersList']);
Route::get('/admin/user_detail', [AttendanceController::class, 'userDetail']);
