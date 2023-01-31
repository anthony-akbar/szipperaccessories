<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\SliderItem;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $sliders = SliderItem::all();
        return view('', compact('sliders'));
    }
}
