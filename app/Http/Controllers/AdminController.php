<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Permission;
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
        $payments=Payment::query()->where('status','successful');
        $sumPay=Payment::query()->where('status','successful')->sum('price');
        $users=User::all();
        return view('admin.index',compact('users','payments','sessionsCount','sumPay'));
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


    public function modifyAdmin($id)
    {
        $user=User::query()->find($id);
        $permissions=Permission::all();
        $permissions_user=DB::table('permission_user')->where('user_id',$id)->get();
        return view('admin.adminManage.modifyAdmin',compact('user','permissions','permissions_user'));
    }

    public function destroy($id)
    {
        User::query()->find($id);
        DB::table('permission_user')->where('user_id',$id)->delete();
        return back();
    }

    public function createOrUpadate(Request $request,$id)
    {
        $permissions_array=array();
        if(isset($request->all()['adminManage'])){
            DB::table('permission_user')->updateOrInsert(['permission_id'=>1,'user_id'=>$id]);
        }
        else
        {
            DB::table('permission_user')->where(['permission_id'=>1,'user_id'=>$id])->delete();
        }

        if(isset($request->all()['memberManage'])){
            DB::table('permission_user')->updateOrInsert(['permission_id'=>2,'user_id'=>$id]);
        }
        else
        {
            DB::table('permission_user')->where(['permission_id'=>2,'user_id'=>$id])->delete();
        }

        if(isset($request->all()['informationManage'])){
            DB::table('permission_user')->updateOrInsert(['permission_id'=>3,'user_id'=>$id]);
        }
        else
        {
            DB::table('permission_user')->where(['permission_id'=>3,'user_id'=>$id])->delete();
        }

        return back();
    }
}
