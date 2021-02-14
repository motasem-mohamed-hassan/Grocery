<?php

namespace App\Http\Controllers\Front;

use App\Image;
use App\Review;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class productsController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::where('parent_id', null)->get();

        $query = Product::where('status', 1);
        if($request->has('search')){
            $query->where('name', 'LIKE', '%'.$request->search.'%');
        }if($request->min && $request->max){
            $query->whereBetween('price', [$request->min, $request->max]);
        }

        $products = $query->get();


        return view('front.index', compact('categories','products'));
    }

    public function show($id)
    {
        $categories     = Category::where('parent_id', null)->get();
        $subCategory    = Category::where('parent_id', '>', 0)->get();



        $product = Product::find($id);
        $images = Image::where('product_id', $id)->get();
        $subCategory = Category::where('id', $product->subCategory_id)->first();

        return view('front.product', compact('product', 'categories', 'images', 'subCategory'));
    }









}
