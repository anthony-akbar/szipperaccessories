<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin', 'namespace'=>'admin'], function () {
    Route::get('/', [DashboardController::class,'index'])->name('admin');
});

Route::get('/', function () {
    return view('front.home.index');
});
