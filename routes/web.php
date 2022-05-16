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
    Route::get('/index', [UserController::class, 'index'])->name('dashboard');
    Route::get('/paymentslist', [UserController::class, 'show'])->name('user/payments');
    Route::post('/payment', [PaymentController::class, 'index'])->name('user/pay');


    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin/index');
        Route::get('/calender', [AdminController::class, 'calender'])->name('admin/calender');
        Route::prefix('payments')
        ->middleware('admin:informationManage')
        ->group(function () {
            Route::get('/all', [PaymentController::class, 'allPayments'])->name('payments/all');
            Route::get('/user', [PaymentController::class, 'userPayments'])->name('payments/user');
            Route::get('/view/{id}', [PaymentController::class, 'paymentsView'])->name('payments/view');
        });
        Route::prefix('adminsmanage')
        ->middleware('admin:adminManage')
        ->group(function () {
            Route::get('/view', [AdminController::class, 'adminView'])->name('adminsview');
            Route::get('/add', [AdminController::class, 'adminAdd'])->name('adminadd');
            Route::get('/modify/{id}', [AdminController::class, 'modifyAdmin'])->name('adminmodify');
            Route::post('/modify/{id}', [AdminController::class, 'createOrUpadate'])->name('admin-insert');
            Route::delete('/delete/{id}', [AdminController::class, 'destroy'])->name('admin-delete');
        });
        Route::prefix('membersmanage')
        ->middleware('admin:memberManage')
        ->group(function () {
            Route::get('/view', [AdminController::class, 'memberView'])->name('membersview');
            Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('member-delete');
        });
    });
});
