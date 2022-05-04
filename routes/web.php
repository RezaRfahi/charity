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

});

});
