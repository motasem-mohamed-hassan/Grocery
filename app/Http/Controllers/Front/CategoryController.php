<?php

namespace App\Http\Controllers\Front;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function show(Request $request, $id)
    {

        $categories     = Category::where('parent_id', null)->get();
        $subCategory    = Category::where('parent_id', '>', 0)->get();

        $category = Category::find($id);

        if($request->min && $request->max){
            $products = Product::whereBetween('price', [$request->min, $request->max])
                        ->where('category_id', $id)
                        ->get();
        }else{
            $products = Product::where('category_id', $id)->get();
        }

        return view('front.category', compact('products', 'categories', 'category', 'subCategory'));

    }
}
