<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Puller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('front.categoriespage.index', ['lang' => \Illuminate\Support\Facades\App::getLocale()], compact('categories'));
    }

    public function show($id) {
        $category = Category::find($id);
        return view('front.categories.show', ['lang' => App::getLocale()],compact('category'));
    }
    public function zipper() {
        $products = Product::all();
        return view('front.zippers.show', ['lang' => App::getLocale()],compact('products'));
    }
    public function slider() {
        $products = Slider::all();
        return view('front.sliders.show', ['lang' => App::getLocale()],compact('products'));
    }
    public function puller() {
        $products = Puller::all();
        return view('front.pullers.show', ['lang' => App::getLocale()],compact('products'));
    }
}
