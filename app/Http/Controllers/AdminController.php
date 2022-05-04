<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{

    public function index()
    {
        $admin=Auth::user();
        return view('admin.index',compact('admin'));
    }
    public function calender()
    {
        $admin=Auth::user();
        return view('admin.calender.calender',compact('admin'));
    }
}
