<?php

namespace App\Http\Controllers\Front;

use App\Image;
use App\Review;
use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class productsController extends Controller
{

    public function index()
    {
        $categories     = Category::where('parent_id', null)->get();
        $subCategory    = Category::where('parent_id', '>', 0)->get();
        $products       = Product::where('status', 1)->get();

        return view('front.index', compact('categories', 'products', 'subCategory'));
    }

    public function show($id)
    {

        $categories     = Category::where('parent_id', null)->get();
        $subCategory    = Category::where('parent_id', '>', 0)->get();

        

        $product = Product::find($id);
        $images = Image::where('product_id', $id)->get();

        return view('front.product', compact('product', 'categories', 'images'));
    }









}
