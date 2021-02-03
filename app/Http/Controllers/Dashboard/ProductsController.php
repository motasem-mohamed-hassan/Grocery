<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Image;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 0)->paginate(10);

        return view('dashboard.products.index', compact('products'));
    }


    public function approve(Request $request)
    {
        $product = Product::find($request->id);
        $product->status = 1;
        $product->save();

        return response()->json([
            'status'    => true,
            'msg'       => 'product approved successfully',

        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        $images = Image::where('product_id', $id)->get();

        return view('dashboard.products.product', compact('product', 'images'));
    }

    public function delete(Request $request)
    {
        $product = product::find($request->id);
        $product->delete();

        // $images = Image::where('product_id', '$request->id')->get();

        // foreach ($images as $image){
        //     $filePath = 'public/products/'.$image->url;

        //     if(file_exists($filePath)){
        //         File::delete($filePath);
        //     }
        // }

        return response()->json([
            'status' => true,
            'msg'    => 'Product deleted successfully',

        ]);

    }


}
