<?php

namespace App\Http\Controllers\admin\zipper;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Puller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PullersController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $pullers = Puller::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.zipper.pullers.index', compact('pullers', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        $pullers = Puller::all();
        return view('admin.zipper.pullers.create', compact('categories', 'pullers'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = Storage::put('/images', $request['image']);
        Puller::create($data);
        return redirect()->route('admin.zipper.pullers');
    }

    public function edit(Request $request, $id)
    {

        $data = $request->validated();
        if (array_key_exists('image', $data)) $data['image'] = Storage::put('/images', $request['image']);
        $product = Puller::find($id);
        $product->update($data);
        return redirect()->route('admin.zipper.pullers');
    }

    public function destroy($id)
    {
        Puller::destroy($id);
        return redirect()->route('admin.zipper.pullers');
    }

    public function search(Request $request)
    {
        $pullers = Puller::where('title', 'Like', '%' . $request['search'] . '%')
            ->orWhere('description', 'Like', '%' . $request->search . '%')
            ->orderBy($request->sort)->paginate(8);
        $output = '';
        $categories = Category::all();
        foreach ($pullers as $product) {
            $output .= view('admin.zipper.pullers.search.productSearch', compact('product', 'categories'));
        }
        return $output;
    }
}
