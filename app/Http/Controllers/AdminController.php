<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class AdminController extends Controller
{

    public function index()
    {
        $sessionsCount=DB::table('sessions')->select('*')->count();
        $payments=Payment::all();
        $users=User::all();
        $admin=Auth::user();
        return view('admin.index',compact('admin','users','payments','sessionsCount'));
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

    public function allPayments()
    {
        $allPayments = DB::table('payments')
        ->join('users', 'user_id', '=', 'users.id')
        ->select(
            'users.name',
            'payments.serial',
            'payments.price',
            'payments.status',
            'payments.created_at'
        )
        ->get();
        $admin=Auth::user();
        return view('admin.payments.allpayments',compact('admin','allPayments'));
    }
}
