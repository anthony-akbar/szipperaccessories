<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Puller;
use App\Models\Slider;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(3);
        $categories = Category::orderBy('created_at', 'desc')->paginate(1);
        $pullers = Puller::orderBy('created_at', 'desc')->paginate(1);
        $sliders = Slider::orderBy('created_at', 'desc')->paginate(1);
        return view('front.products.productpage.index', ['lang' => \Illuminate\Support\Facades\App::getLocale()], compact('products', 'categories', 'pullers', 'sliders'));
    }
}
//$categories = Category::all();
//$sliders = Slider::orderBy('created_at', 'desc')->paginate(12);
//return view('admin.zipper.sliders.index', compact('sliders', 'categories'));
