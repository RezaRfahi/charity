<?php

use App\Http\Controllers\AdminController;
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
    Route::get('/index', function () {
        return view('dashboard');
    })->name('dashboard');

Route::prefix('admin')->group(function()
{
    Route::get('/',[AdminController::class,'index'])->name('admin/index');
    Route::get('/calender',[AdminController::class,'calender'])->name('admin/calender');
    Route::prefix('adminsmanage')->group(function()
    {
        Route::get('view',[AdminController::class,'adminView'])->name('adminsview');
        Route::get('add',[AdminController::class,'adminAdd'])->name('adminadd');
    });
    Route::prefix('membersmanage')->group(function()
    {
        Route::get('view',[AdminController::class,'memberView'])->name('membersview');
    });
});

});
