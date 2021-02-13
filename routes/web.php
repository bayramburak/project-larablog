<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;



Route::get('', [MainController::class, 'index'])->name('homepage');
Route::get('/team',[TeamController::class,'team'])->name('team');
Route::get('/blog',[BlogController::class,'blog'])->name('blog');


Route::match(['post','get'],'/registration', [AuthController::class, 'register'])->name('register');
Route::get( '/logout', [AuthController::class, 'logout'])->name('logout');
Route::get( '/register-confirm/{activation_code}', [AuthController::class, 'registerConfirm'])
    ->name('register-confirmation');
Route::match(['post', 'get'], 'login', [AuthController::class, 'login'])->name('login');



Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    // Route::get('login',[AdminController::class,'login']);
    Route::match(['post', 'get'], 'login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    /* ->middleware('admin');;*/
});



Route::view('/events','front.new-events')->name('events');
Route::view('/subscribe','front.new-subscribe')->name('subscribe');
