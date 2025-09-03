<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function adminAttendance()
    {
        return view('admin.attendance');
    }

    public function usersList()
    {
        return view('admin.user_list');
    }

    public function userDetail()
    {
        return view('admin.user_detail');
    }
}
