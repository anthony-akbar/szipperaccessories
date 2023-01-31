<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\zipper\CategoriesController;
use App\Models\Category;
use App\Models\SliderItem;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', [SliderController::class, 'index'])->name('admin.slider');
        Route::post('/store', [SliderController::class, 'store'])->name('admin.slider.store');
        Route::delete('/{id}', [SliderController::class, 'destroy'])->name('admin.slider.delete');
    });
    Route::group(['prefix' => 'zipper', 'namespace' => 'zipper'], function () {
        Route::group(['prefix' => 'categories', 'namespace' => 'categories'], function () {
            Route::get('/', [CategoriesController::class, 'index'])->name('admin.zipper.categories');
            Route::post('/store', [CategoriesController::class, 'store'])->name('admin.zipper.categories.store');
            Route::delete('/{id}', [CategoriesController::class, 'destroy'])->name('admin.zipper.categories.delete');
            Route::get('/{id}', [CategoriesController::class, 'show'])->name('admin.zipper.categories.show');

        });
    });
});

Route::get('/', function () {
    $sliders = SliderItem::all();
    $categories = Category::orderBy('created_at', 'desc')->paginate(4);
    return view('front.home.index', compact('sliders', 'categories'));
});
