<?php

namespace App\Http\Controllers\Front;

use App\Image;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AddController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();

        return view('front.add', compact('categories'));
    }

    public function choseSub(Request $request)
    {

        $subCategories = Category::where('parent_id', $request->id)->get();

        return response()->json([
            'status'    => true,
            'data'      => $subCategories
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->user_id           = Auth::id();
        $product->name              = $request->name;
        $product->description       = $request->description;
        $product->category_id       = $request->category_id;
        $product->subCategory_id    = $request->subCategory_id;
        $product->price             = $request->price;
        $product->status            = 0;
        $product->save();

        $images = $request->file('image');
        foreach($images as $key =>$image)
        {
            if($request->image[$key]->getClientOriginalName()) {
                $ext    = $image->getClientOriginalExtension();
                $file   = date('YmdHis').rand(1,99999).'.'.$ext;
                $image->storeAs('public/products', $file);
            }

            $imag = new Image();
            $imag->product_id   = $product->id;
            $imag->url          = $file;
            $imag->save();

        }


        return redirect()->route('home')->with('msg', 'waiting for approved');
    }

}
