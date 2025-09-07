<?php

use App\Http\Controllers\AdministratorAuthenticationController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['guest:admins'])->name('admin.')->group(function () {
    Route::get('login', [AdministratorAuthenticationController::class, 'create'])->name('login');
    Route::post('login', [AdministratorAuthenticationController::class, 'store']);
});

Route::prefix('admin')->middleware(['auth:admins'])->name('admin.')->group(function () {
    Route::get('attendance', [AttendanceController::class, 'adminAttendance'])->name('attendance');
    Route::get('user_list', [AttendanceController::class, 'usersList'])->name('user_list');
    Route::get('user_detail', [AttendanceController::class, 'userDetail'])->name('user_detail');
});
