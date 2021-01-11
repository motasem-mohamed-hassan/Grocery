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
        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('dashboard.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

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
        $product->save();


        if(($request->file('image')) == !null) {

            $images = $request->file('image');
            foreach($images as $key =>$image)
            {
                if($request->image[$key]->getClientOriginalName()) {
                    $ext    = $image->getClientOriginalExtension();
                    $file   = date('YmdHis').rand(1,99999).'.'.$ext;
                    $image->storeAs('public/products', $file);
                }

                $imag = new Image();
                $imag->product_id = $id;
                $imag->url = $file;
                $imag->save();

            }

        }

        return redirect()->route('admin.products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product =Product::find($id);
        $product->delete();

        return redirect()->route('admin.categories.index');
    }
}
