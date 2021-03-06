<?php

namespace App\Http\Controllers\Dashboard;

use App\Image;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(50);
        $user = Auth::user();

        return view('dashboard.products.index', compact('products', 'user'));
    }

    public function waiting()
    {
        $user = Auth::user();
        $products = Products::where('status', 0)->paginate(50);

        return view('dashboard.products.waiting', compact('user', 'products'));
    }

    public function approved()
    {
        $user = Auth::user();
        $products = Products::where('status', 1)->paginate(50);

        return view('dashboard.products.approved', compact('user', 'products'));
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
        $user = Auth::user();
        $product = Product::find($id);
        $images = Image::where('product_id', $id)->get();

        return view('dashboard.products.product', compact('user','product', 'images', 'setting'));
    }

    public function delete(Request $request)
    {
        $oldimages = Image::where('product_id', $request->id)->get();
        foreach($oldimages as $oldimage)
        {
            Storage::disk('local')->delete('public/products/'.$oldimage->url);
        }


        $product = product::find($request->id);
        $product->delete();

        return response()->json([
            'status' => true,
            'msg'    => 'Product deleted successfully',

        ]);

    }


}
