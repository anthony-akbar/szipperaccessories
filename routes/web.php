<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\front\SliderController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin', 'namespace'=>'admin'], function () {
    Route::get('/', [DashboardController::class,'index'])->name('admin');
    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', [SliderController::class, 'index'])->name('admin.slider');
        Route::post('/store', [SliderController::class, 'store'])->name('admin.slider.store');
        Route::delete('/{id}', [SliderController::class, 'destroy'])->name('admin.slider.delete');
    });
Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
});

Route::get('/', function () {
    return view('front.home.index');
});
Route::group(['prefix' => 'slider'], function () {
    Route::get('/', [SliderController::class, 'index'])->name('front.slider');
});
