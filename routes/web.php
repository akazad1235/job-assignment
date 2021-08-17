<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\dashboardController;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\MemberController;



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
//#######################_start Member_##########################

Route::get('member', [MemberController::class, 'index']);
Route::post('registration/member', [MemberController::class, 'store'])->name('reg.member');

//#######################_end Member_##########################
Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('dashboard/member/search', [dashboardController::class, 'memberSearch'])->name('search');
    Route::post('dashboard/member/search', [dashboardController::class, 'getMemberSearch'])->name('DataSearch');

});



Auth::routes(['register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
