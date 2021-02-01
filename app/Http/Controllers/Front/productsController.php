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
        $categories = Category::all(); //for all products sort by order count & categories navbar

        $itemsCount = \Cart::session(Session::getId())->getTotalQuantity();


        return view('front.index', compact('categories', 'itemsCount'));
    }

    public function show($id)
    {
        $itemsCount = \Cart::session(Session::getId())->getTotalQuantity();

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

        //product Review avg
        $avg = $product->reviews()->avg('rating');
        //review list
        $reviewsList = Review::where('product_id', $id)->get();


        return view('front.product', compact('product', 'categories', 'images', 'orderd', 'reviewCart', 'yourReview', 'avg', 'reviewsList', ''));
    }









}
