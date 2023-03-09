<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use App\Models\Puller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $categories = Category::all();
        return view('front.pages.categories.index', ['lang' => App::getLocale()], compact('categories', 'abouts'));
    }

    public function show($id)
    {
        $abouts = About::all();
        $category = Category::find($id);
        return view('front.pages.categories.show', ['lang' => App::getLocale()], compact('category', 'abouts'));
    }

    public function zipper()
    {
        $abouts = About::all();
        $products = Product::all();
        return view('front.zippers.show', ['lang' => App::getLocale()], compact('products', 'abouts'));
    }

    public function slider()
    {
        $abouts = About::all();
        $products = Slider::all();
        return view('front.sliders.show', ['lang' => App::getLocale()], compact('products', 'abouts'));
    }

    public function puller()
    {
        $abouts = About::all();
        $products = Puller::all();
        return view('front.pullers.show', ['lang' => App::getLocale()], compact('products', 'abouts'));
    }
}
