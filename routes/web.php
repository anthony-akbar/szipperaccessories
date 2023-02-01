<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\zipper\CategoriesController;
use App\Http\Controllers\admin\zipper\ProductsController;
use App\Http\Controllers\admin\zipper\PullersController;
use App\Http\Controllers\admin\zipper\SlidersController;
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
        Route::group(['prefix'=>'products', 'namespace'=>'products'], function () {
            Route::get('/', [ProductsController::class, 'index'])->name('admin.zipper.products');
            Route::post('/store', [ProductsController::class, 'store'])->name('admin.zipper.products.store');
            Route::get('/search', [ProductsController::class, 'search'])->name('admin.zipper.products.search');
            Route::post('/{id}/edit', [ProductsController::class, 'edit'])->name('admin.zipper.products.edit');
            Route::delete('/{id}', [ProductsController::class, 'destroy'])->name('admin.zipper.products.delete');
        });
        Route::group(['prefix'=>'pullers', 'namespace'=>'pullers'], function (){
            Route::get('/', [PullersController::class, 'index'])->name('admin.zipper.pullers');
            Route::post('/store', [PullersController::class, 'store'])->name('admin.zipper.pullers.store');
            Route::get('/search', [PullersController::class, 'search'])->name('admin.zipper.pullers.search');
            Route::post('/{id}/edit', [PullersController::class, 'edit'])->name('admin.zipper.pullers.edit');
            Route::delete('/{id}', [PullersController::class, 'destroy'])->name('admin.zipper.pullers.delete');
        });
        Route::group(['prefix'=>'sliders', 'namespace'=>'sliders'], function (){
            Route::get('/', [SlidersController::class, 'index'])->name('admin.zipper.sliders');
            Route::post('/store', [SlidersController::class, 'store'])->name('admin.zipper.sliders.store');
            Route::get('/search', [SlidersController::class, 'search'])->name('admin.zipper.sliders.search');
            Route::post('/{id}/edit', [SlidersController::class, 'edit'])->name('admin.zipper.sliders.edit');
            Route::delete('/{id}', [SlidersController::class, 'destroy'])->name('admin.zipper.sliders.delete');
        });
    });
});

Route::get('/', function () {
    $sliders = SliderItem::all();
    $categories = Category::orderBy('created_at', 'desc')->paginate(4);
    return view('front.home.index', compact('sliders', 'categories'));
});
