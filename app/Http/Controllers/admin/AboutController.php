<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        About::create($data);
        return redirect()->route('admin.about');
    }

    public function edit(Request $request, $id) {
        $about = About::find($id);
        $about->update($request->all());
        return redirect()->route('admin.about');
    }
}
