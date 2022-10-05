<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;



//ADMIN
Route::name('admin.')->prefix('/admin')->group(function () {

Route::get('/',[AdminController::class,'index'])->name('index');

});

//FRONT
Route::get('/', function () {
    return view('welcome');
});

