<?php

use App\Http\Controllers\CarControler;
use App\Http\Controllers\homeController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\signupController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,'index'])->name('home');


Route::get('/car/search',[CarControler::class,'search'])->name('car.search');
Route::resource('car',CarControler::class); 

Route::get('/singin',[signinController::class,'create'])->name('singin');
Route::get('/singup',[signupController::class,'create'])->name('singup');