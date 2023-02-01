<?php

namespace App\Http\Controllers\admin\zipper;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlidersController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $sliders = Slider::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.zipper.sliders.index', compact('sliders', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        $sliders = Slider::all();
        return view('admin.zipper.sliders.create', compact('categories', 'sliders'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = Storage::put('/images', $request['image']);
        Slider::create($data);
        return redirect()->route('admin.zipper.sliders');
    }

    public function edit(Request $request, $id)
    {

        $data = $request->validated();
        if (array_key_exists('image', $data)) $data['image'] = Storage::put('/images', $request['image']);
        $product = Slider::find($id);
        $product->update($data);
        return redirect()->route('admin.zipper.sliders');
    }

    public function destroy($id)
    {
        Slider::destroy($id);
        return redirect()->route('admin.zipper.sliders');
    }

    public function search(Request $request)
    {
        $sliders = Slider::where('title', 'Like', '%' . $request['search'] . '%')
            ->orWhere('description', 'Like', '%' . $request->search . '%')
            ->orderBy($request->sort)->paginate(8);
        $output = '';
        $categories = Category::all();
        foreach ($sliders as $product) {
            $output .= view('admin.zipper.sliders.search.productSearch', compact('product', 'categories'));
        }
        return $output;
    }
}
