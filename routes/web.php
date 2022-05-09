<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function ()
{
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/index',[UserController::class,'index'])->name('dashboard');
    Route::get('/paymentslist/{id}',[UserController::class,'show'])->name('user/payments');


Route::prefix('admin')->group(function()
{
    Route::get('/',[AdminController::class,'index'])->name('admin/index');
    Route::get('/calender',[AdminController::class,'calender'])->name('admin/calender');
    Route::get('/session',[AdminController::class,'session'])->name('admin/session');
    Route::prefix('payments')->group(function(){
        Route::get('/all',[AdminController::class,'allPayments'])->name('payments/all');
        Route::get('/user',[AdminController::class,'userPayments'])->name('payments/user');
        Route::get('/view/{id}',[AdminController::class,'paymentsView'])->name('payments/view');
    });
    Route::prefix('adminsmanage')->group(function()
    {
        Route::get('/view',[AdminController::class,'adminView'])->name('adminsview');
        Route::get('/add',[AdminController::class,'adminAdd'])->name('adminadd');
        Route::get('/modify/{id}',[AdminController::class,'modifyAdmin'])->name('adminmodify');
        Route::post('/modify/{id}',[AdminController::class,'createOrUpadate'])->name('admin-insert');
        Route::delete('/delete/{id}',[AdminController::class,'destroy'])->name('admin-delete');
    });
    Route::prefix('membersmanage')->group(function()
    {
        Route::get('/view',[AdminController::class,'memberView'])->name('membersview');
        Route::delete('/delete/{id}',[UserController::class,'destroy'])->name('member-delete');
    });
});

});
