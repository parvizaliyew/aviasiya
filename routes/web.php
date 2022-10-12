<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\ProfilController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\SliderController;



//ADMIN
Route::name('admin.')->prefix('/admin')->group(function () {

Route::group(['middleware' => 'islogin'],function()
{
    Route::get('/login',[AuthController::class, 'index'])->name('login');
    Route::post('/login',[AuthController::class,'login_post'])->name('login_post');
    Route::get('/sign-up',[AuthController::class,     'sign_up'])->name('signup');   
    Route::post('/sign-up',[AuthController::class,'signup_post'])->name('signup_post');

});

Route::group(['middleware' => 'notlogin'],function()
{
    Route::group(['middleware'=>'role:admin'],function()
    {
        Route::get('/slider',[SliderController::class,     'index'])->name('slider.index');
        Route::get('/slider-create',[SliderController::class,     'create'])->name('slider.create');
        Route::post('/slider-store',[SliderController::class,     'store'])->name('slider.store');
        Route::get('/slider-show/{id}',[SliderController::class,     'show'])->name('slider.show');
        Route::get('/slider-edit/{id}',[SliderController::class,     'edit'])->name('slider.edit');
        Route::post('/slider-update/{id}',[SliderController::class,    'update'])->name('slider.update');
        Route::get('/slider-delete/{id}',[SliderController::class,     'delete'])->name('slider.delete');
        Route::get('/slider-sort',[SliderController::class,     'sort'])->name('slider.sort');

        Route::get('/about',[AboutController::class ,'index'])->name('about');
        Route::post('/about/{id}',[AboutController::class,    'update'])->name('about.update');


    });
    Route::get('/',[AdminController::class,     'index'])->name('index');
    Route::get('/profil-update',[ProfilController::class,'edit'])->name('profil');
    Route::post('/profil-update',[ProfilController::class,'update'])->name('profil.update');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

});

});

//FRONT
Route::get('/', [FrontController::class,'index'])->name('index');

