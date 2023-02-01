<?php

namespace App\Http\Controllers\admin\zipper;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.zipper.products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('admin.zipper.products.create', compact('categories', 'products'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = Storage::put('/images', $request['image']);
        Product::create($data);
        return redirect()->route('admin.zipper.products');
    }

    public function edit(Request $request, $id)
    {

        $data = $request->validated();
        if (array_key_exists('image', $data)) $data['image'] = Storage::put('/images', $request['image']);
        $product = Product::find($id);
        $product->update($data);
        return redirect()->route('admin.zipper.products');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.zipper.products');
    }

    public function search(Request $request)
    {
        $products = Product::where('title', 'Like', '%' . $request['search'] . '%')
            ->orWhere('description', 'Like', '%' . $request->search . '%')
            ->orderBy($request->sort)->paginate(8);
        $output = '';
        $categories = Category::all();
        foreach ($products as $product) {
            $output .= view('admin.zipper.products.search.productSearch', compact('product', 'categories'));
        }
        return $output;
    }
}
