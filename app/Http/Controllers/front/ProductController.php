<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use App\Models\Puller;
use App\Models\Slider;

class ProductController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $products = Product::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $pullers = Puller::orderBy('created_at', 'desc')->get();
        $sliders = Slider::orderBy('created_at', 'desc')->get();
        return view('front.pages.products.index', ['lang' => \Illuminate\Support\Facades\App::getLocale()], compact('products', 'categories', 'pullers', 'sliders','abouts'));
    }

    public function show($id) {
        dd($id);
    }

}
