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
        return view('admin.index',compact('admin','users','payments','sessionsCount','sumPay'));
    }

    public function calender()
    {
        return view('admin.calender.calender');
    }

    public function memberView()
    {
        $users=User::all();
        return view('admin.member.memberView',compact('users'));
    }

    public function adminView()
    {
        $admins = User::whereHas('permissions')->get();
        return view('admin.adminManage.adminView',compact('admins'));
    }

    public function adminAdd()
    {
        $users=User::query()->doesntHave('permissions')->get();
        return view('admin.adminManage.adminAdd',compact('users'));
    }

    public function session()
    {
        $admin=Auth::user();
        return view('admin.info.session');
    }

    public function allPayments()
    {
        $allPayments = Payment::query()
        ->with('user:name,id')
        ->get();
        return view('admin.payments.allpayments',compact('allPayments'));
    }

    public function userPayments()
    {
        $users=User::all();
        return view('admin.payments.userpayments',compact('users'));
    }

    public function paymentsView($id)
    {
        $user=User::query()->find($id);
        $user_payments=$user->payments;
        $sum_payments=Payment::query()->where([['user_id',$id],['status','successful']])->sum('price');
        return view('admin.payments.paymentsview',compact('user','user_payments','sum_payments'));
    }
}
