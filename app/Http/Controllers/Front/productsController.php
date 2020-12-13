<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $topProducts = Product::orderBy('order_count', 'desc')->get();
        return view('front.index', compact('categories', 'topProducts'));
    }

}
