<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('front.categoriespage.index', ['lang' => \Illuminate\Support\Facades\App::getLocale()], compact('categories'));
    }

    public function show($id) {
        $category = Category::find($id);
        return view();
    }
}
