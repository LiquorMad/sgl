<?php

use App\Http\Controllers\FonteController;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
 
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['AuthCheck']],function(){

    Route::resource('/login',LoginController::class);

    Route::resource('/logout',LogoutController::class);

    Route::resource('/links',LinkController::class);

    Route::resource('/users',UserController::class);

    Route::resource('/fontes',FonteController::class);

    Route::get('/links/auto/store',[LinkController::class,'autoStore'])->name('links.auto.store');
    
});


