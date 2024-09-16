<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::prefix('/admin-managements')->name('admin')->controller(AdminController::class)->group(function(){
    Route::get('/', 'index')->name('index');
});