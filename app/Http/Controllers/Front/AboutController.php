<?php

namespace App\Http\Controllers\Front;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $itemsCount = \Cart::session(Session::getId())->getTotalQuantity();

        return view('front.about', compact('categories', 'itemsCount'));
    }
}
