<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::controller(UserController::class)->group(function(){
        Route::get('/index', 'index')->name('dashboard');
        Route::get('/paymentslist', 'show')->name('user/payments');
});

Route::controller(PaymentController::class)->group(function(){
    Route::post('/payment', 'create')->name('user/pay');
    Route::get('payment/callback', 'callback')->name('payment.callback');
});

    Route::prefix('admin')->group(function () {
        Route::controller(AdminController::class)->group(function(){
            Route::get('/', 'index')->name('admin/index');
            Route::get('/calender', 'calender')->name('admin/calender');
        });
        Route::prefix('payments')
        ->middleware('admin:informationManage')
        ->group(function () {
            Route::controller(PaymentController::class)->group(function(){
                Route::get('/all', 'allPayments')->name('payments/all');
                Route::get('/user', 'userPayments')->name('payments/user');
                Route::get('/view/{id}', 'paymentsView')->name('payments/view');
            });
            });
        Route::prefix('adminsmanage')
        ->middleware('admin:adminManage')
        ->group(function () {
            Route::controller(AdminController::class)->group(function(){
                Route::get('/view', 'adminView')->name('adminsview');
                Route::get('/add', [AdminController::class, 'adminAdd'])->name('adminadd');
                Route::get('/modify/{id}', 'modifyAdmin')->name('adminmodify');
                Route::post('/modify/{id}', 'createOrUpadate')->name('admin-insert');
                Route::delete('/delete/{id}', 'destroy')->name('admin-delete');
            });
        });
        Route::prefix('membersmanage')
        ->middleware('admin:memberManage')
        ->group(function () {
            Route::get('/view', [AdminController::class, 'memberView'])->name('membersview');
            Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('member-delete');
        });
    });
});
