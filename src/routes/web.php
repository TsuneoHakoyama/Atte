<?php

use App\Http\Controllers\AdministratorAuthenticationController;
use App\Http\Controllers\AttendanceController;
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

Route::get('/', [AttendanceController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/admin/login', [AdministratorAuthenticationController::class, 'create']);

Route::get('/admin/attendance', [AttendanceController::class, 'adminAttendance']);

Route::get('/admin/user_list', [AttendanceController::class, 'usersList']);

Route::get('/admin/user_detail', [AttendanceController::class, 'userDetail']);
