<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Image;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('first_image')->paginate(10);
        $categories = Category::all();
        return view('dashboard.products.index', compact('products', 'categories'));
    }

    public function store(Request $request)
    {

        $product= new Product();

        $product->name          = $request->name;
        $product->category_id   = $request->category_id;
        $product->description   = $request->description;

        if(isset($request->discount)) {
            $product->discount = $request->discount;
            $product->oldPrice = $request->price;
            $product->price = $request->price * (1- $product->discount / 100);
        }else{
            $product->price = $request->price;
        }


        $product->stock         = $request->stock;
        $product->order_count   = 0;
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
            $imag->product_id = $product->id;
            $imag->url = $file;
            $imag->save();

        }
        $product->category;
        $product->first_image;

        return response()->json([
            'status' => true,
            'msg'    => 'Product saved successfully',
            'data'     => $product,
        ]);
    }


    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        $category = Category::find($product->category_id);

        $product->first_image;
        $product->images;

        return response()->json([
            'status' => true,
            'data'     => $product,
            'category'  => $category
        ]);
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);

        $product->name          = $request->name;
        $product->category_id   = $request->category_id;
        $product->description   = $request->description;

        if(isset($request->discount)) {
            $product->discount = $request->discount;
            $product->oldPrice = $request->price;
            $product->price = $request->price * (1- $product->discount / 100);
        }else{
            $product->price = $request->price;
        }


        $product->stock         = $request->stock;
        $product->order_count   = $request->order_count;
        $product->update();

        // $images = $request->file('image');
        // foreach($images as $key =>$image)
        // {
        //     if($request->image[$key]->getClientOriginalName()) {
        //         $ext    = $image->getClientOriginalExtension();
        //         $file   = date('YmdHis').rand(1,99999).'.'.$ext;
        //         $image->storeAs('public/products', $file);
        //     }

        //     $imag = new Image();
        //     $imag->product_id = $product->id;
        //     $imag->url = $file;
        //     $imag->update();
        // }
        $product->category;
        $product->first_image;
        $product->images;

        return response()->json([
            'status' => true,
            'msg'    => 'product updated successfully',
            'data'     => $product,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = product::find($request->id);
        $product->delete();

        return response()->json([
            'status' => true,
            'msg'    => 'Product deleted successfully',
            'id'     => $request->id
        ]);

    }


}
