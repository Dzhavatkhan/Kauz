<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminVideoController;
use Illuminate\Support\Facades\Route;

//Авторизация админа
Route::middleware("guest:admin")->group(function(){
Route::get('login', [AdminAuthController::class, 'index' ])->name("login");
Route::post('login_process', [AdminAuthController::class, 'login' ])->name("login_process");
});

Route::middleware("auth:admin")->group(function(){
    Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::resource('videos', AdminVideoController::class);
    //Админ-панель
    Route::get('videos', [AdminVideoController::class, 'index'])->name('videos.index');
});

