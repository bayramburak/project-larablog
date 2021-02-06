<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;



Route::get('', [MainController::class, 'index'])->name('homepage');
Route::get('/team',[\App\Http\Controllers\TeamController::class,'team'])->name('team');



Route::view('/login','front.auth.login')->name('login');
Route::view('/registration','front.auth.register')->name('register');
Route::view('/blog','front.new-blog')->name('blog');
Route::view('/events','front.new-events')->name('events');
Route::view('/subscribe','front.new-subscribe')->name('subscribe');
