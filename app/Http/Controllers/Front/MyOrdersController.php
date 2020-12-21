<?php

namespace App\Http\Controllers\Front;

use App\Image;
use App\Order;
use App\Product;
use App\Category;
use App\order_product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyOrdersController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $orders = Order::where('user_id', Auth::id())->get();

        return view('front.orders', compact('categories', 'orders'));
    }

}
