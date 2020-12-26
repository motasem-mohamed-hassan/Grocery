<?php

namespace App\Http\Controllers\Front;

use App\Image;
use App\Order;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Support\Facades\Auth;

class productsController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $topProducts = Product::orderBy('order_count', 'desc')->get();

        return view('front.index', compact('categories', 'topProducts'));
    }

    public function show($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        $images = Image::where('product_id', $id)->get();

        //make review
        if($product->orders->where('user_id', Auth::id())->count() > 0){
            $orderd = true;
        }else{
            $orderd = false;
        }

        //review Cart
        $matchThese = ['user_id' => Auth::id(), 'product_id' => $id];
        if(Review::where($matchThese)->count() > 0){
            $reviewCart = true;
            $yourReview = Review::where($matchThese)->first();
        }else{
            $reviewCart = false;
        }
        return view('front.product', compact('product', 'categories', 'images', 'orderd', 'reviewCart', 'yourReview'));
    }

}
