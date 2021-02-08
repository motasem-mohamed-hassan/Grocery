<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function autocomplete(Request $request)
    {
        $products = Product::select("name")
                ->where("name","LIKE","%{$request->words}%")
                ->get();

         return response()->json([
             'status'    => true,
             'msg'   =>'ok',
             'data'  => $products
        ]);
    }

}
