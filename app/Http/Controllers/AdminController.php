<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function memberView()
    {
        $users=User::all();

        $admin=Auth::user();
        return view('admin.member.memberView',compact('admin','users'));
    }
    public function adminView()
    {
        $admin=Auth::user();
        return view('admin.adminManage.adminView',compact('admin'));
    }
    public function adminAdd()
    {
        $admin=Auth::user();
        return view('admin.adminManage.adminAdd',compact('admin'));
    }

    public function session()
    {
        $admin=Auth::user();
        return view('admin.info.session',compact('admin'));
    }

}
