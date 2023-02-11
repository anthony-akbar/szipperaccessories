<?php

namespace App\Http\Controllers\admin\zipper;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.zipper.categories.index', compact('categories'));
    }

        public function store(Request $request) {
            $data = $request->all();
            $data['image'] = Storage::put('/images', $data['image']);
            Category::create($data);
            return redirect()->route('admin.zipper.categories');
        }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('admin.zipper.categories');
    }

    public function show($id) {
        dd($id);
    }
}
