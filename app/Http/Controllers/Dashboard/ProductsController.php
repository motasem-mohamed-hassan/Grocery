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

    public function delete(Request $request)
    {
        $product = product::find($request->id);
        $product->delete();

        return response()->json([
            'status' => true,
            'msg'    => 'Product deleted successfully',

        ]);

    }


}
