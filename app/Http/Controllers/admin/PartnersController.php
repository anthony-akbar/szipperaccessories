<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnersController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $partners = Partner::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.partners.index', compact('partners', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        $partners = Partner::all();
        return view('admin.partners.create', compact('categories', 'partners'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = Storage::put('/images', $request['image']);
        Partner::create($data);
        return redirect()->route('admin.partners');
    }

    public function edit(Request $request, $id)
    {

        $data = $request->validated();
        if (array_key_exists('image', $data)) $data['image'] = Storage::put('/images', $request['image']);
        $product = Partner::find($id);
        $product->update($data);
        return redirect()->route('admin.partners');
    }

    public function destroy($id)
    {
        Partner::destroy($id);
        return redirect()->route('admin.partners');
    }

    public function search(Request $request)
    {
        $partners = Partner::where('title', 'Like', '%' . $request['search'] . '%')
            ->orWhere('description', 'Like', '%' . $request->search . '%')
            ->orderBy($request->sort)->paginate(8);
        $output = '';
        $categories = Category::all();
        foreach ($partners as $product) {
            $output .= view('admin.partners.search.productSearch', compact('product', 'categories'));
        }
        return $output;
    }
}
