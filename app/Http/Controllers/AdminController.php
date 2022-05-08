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
        $sumPay=DB::table('payments')->where('status','successful')->sum('price');
        $users=User::all();
        $admin=Auth::user();
        return view('admin.index',compact('admin','users','payments','sessionsCount','sumPay'));
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
        $admins = User::whereHas('permissions')->get();
        $admin=Auth::user();
        return view('admin.adminManage.adminView',compact('admin','admins'));
    }

    public function adminAdd()
    {
        $users=User::query()->doesntHave('permissions')->get();
        $admin=Auth::user();
        return view('admin.adminManage.adminAdd',compact('admin','users'));
    }

    public function session()
    {
        $admin=Auth::user();
        return view('admin.info.session',compact('admin'));
    }

    public function allPayments()
    {
        $allPayments = Payment::query()
        ->with('user:name,id')
        ->get();
        $admin=Auth::user();
        return view('admin.payments.allpayments',compact('admin','allPayments'));
    }

    public function userPayments()
    {
        $users=User::all();
        $admin=Auth::user();
        return view('admin.payments.userpayments',compact('admin','users'));
    }

    public function paymentsView($id)
    {
        Payment::query()->where('id',$id)->get();
        $admin=Auth::user();
        return view('admin.payments.paymentsview',compact('admin'));
    }
}
