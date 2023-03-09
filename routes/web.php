<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PartnersController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\zipper\CategoriesController;
use App\Http\Controllers\admin\zipper\ProductsController;
use App\Http\Controllers\admin\zipper\PullersController;
use App\Http\Controllers\admin\zipper\SlidersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\front\CategoryController;
use App\Http\Controllers\front\ProductController;
use App\Models\About;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Puller;
use App\Models\Slider;
use App\Models\SliderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);
Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
    Route::group(['prefix' => 'slider'], function () {
        Route::get('/', [SliderController::class, 'index'])->name('admin.slider');
        Route::post('/store', [SliderController::class, 'store'])->name('admin.slider.store');
        Route::post('/{id}/edit', [SliderController::class, 'edit'])->name('admin.slider.edit');
        Route::delete('/{id}', [SliderController::class, 'destroy'])->name('admin.slider.delete');
    });
    Route::group(['prefix' => 'categories', 'namespace' => 'categories'], function () {
        Route::get('/', [CategoriesController::class, 'index'])->name('admin.zipper.categories');
        Route::post('/store', [CategoriesController::class, 'store'])->name('admin.zipper.categories.store');
        Route::delete('/{id}', [CategoriesController::class, 'destroy'])->name('admin.zipper.categories.delete');
        Route::get('/{id}', [CategoriesController::class, 'show'])->name('admin.zipper.categories.show');
    });
    Route::group(['prefix' => 'partners'], function () {
        Route::get('/', [PartnersController::class, 'index'])->name('admin.partners');
        Route::post('/store', [PartnersController::class, 'store'])->name('admin.partners.store');
        Route::get('/search', [PartnersController::class, 'search'])->name('admin.partners.search');
        Route::post('/{id}/edit', [PartnersController::class, 'edit'])->name('admin.partners.edit');
        Route::delete('/{id}', [PartnersController::class, 'destroy'])->name('admin.partners.delete');
    });
    Route::group(['prefix' => 'about'], function () {
        Route::get('/', [AboutController::class, 'index'])->name('admin.about');
        Route::post('/store', [AboutController::class, 'store'])->name('admin.about.store');
        Route::post('/edit/{id}', [AboutController::class, 'edit'])->name('admin.about.edit');
    });
    Route::group(['prefix' => 'products', 'namespace' => 'products'], function () {
        Route::get('/', [ProductsController::class, 'index'])->name('admin.zipper.products');
        Route::post('/store', [ProductsController::class, 'store'])->name('admin.zipper.products.store');
        Route::get('/search', [ProductsController::class, 'search'])->name('admin.zipper.products.search');
        Route::post('/{id}/edit', [ProductsController::class, 'edit'])->name('admin.zipper.products.edit');
        Route::delete('/{id}', [ProductsController::class, 'destroy'])->name('admin.zipper.products.delete');
    });
    Route::group(['prefix' => 'contactus'], function (){
        Route::get('/', [\App\Http\Controllers\ContactUsController::class, 'index'])->name('admin.contactus');
    });
});

Route::get('/', function () {
    $phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
    $categories = Category::all();
    $pullers = Puller::orderBy('created_at', 'desc')->paginate(3);
    $sliders = Slider::orderBy('created_at', 'desc')->paginate(3);
    $partners = Partner::all();
    $abouts = About::all();
    $phonenumber = 0;
    if(!$abouts->isEmpty()){
        $swissNumberProto = $phoneUtil->parse($abouts[0]->phone, "UZ");
        $phonenumber = $phoneUtil->format($swissNumberProto, \libphonenumber\PhoneNumberFormat::INTERNATIONAL);
    }
    $slidersItem = SliderItem::all();
    return view('front.home.index', ['lang' => \Illuminate\Support\Facades\App::getLocale()], compact('phonenumber', 'sliders', 'categories', 'pullers', 'slidersItem', 'partners', 'abouts'));
})->name('homepage');
Route::post('/contact', [ContactController::class, 'store'])->name('front.contact');
Route::get('/product', [ProductController::class, 'index'])->name('productpage');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('front.category');
    Route::get('/{id}', [CategoryController::class, 'show'])->name('front.category.show');
});

//Auth::routes();

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
