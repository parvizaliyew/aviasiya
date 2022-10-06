<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Front\FrontController;



//ADMIN
Route::name('admin.')->prefix('/admin')->group(function () {

Route::group(['middleware' => 'islogin'],function()
{
    Route::get('/login',[AuthController::class, 'index'])->name('login');
    Route::post('/login',[AuthController::class,'login_post'])->name('login_post');
});

Route::group(['middleware' => 'notlogin'],function()
{
    Route::get('/',[AdminController::class,     'index'])->name('index');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});

});

//FRONT
Route::get('/', [FrontController::class,'index'])->name('index');

