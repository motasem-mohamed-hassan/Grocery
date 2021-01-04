<?php

namespace App\Http\Controllers\Front;

use App\Order;
use App\Review;
use App\Category;
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

    public function show($id)
    {
        $categories = Category::all();

        $order = Order::find($id);

        $products = $order->products;

        return view('front.orderdetails', compact('categories','products'));
    }

    public function review(Request $request, $id)
    {
        $my_rating = new Review();
        $my_rating->user_id     = Auth::id();
        $my_rating->product_id  = $id;
        $my_rating->rating        = $request->star;
        $my_rating->review      = $request->review;
        $my_rating->save();

        return redirect()->back()->with('success','Your REVIEW has been saved successfuly!');
    }

    public function deleteReview($id)
    {
        $review = review::find($id);
        $review->delete();

        return redirect()->back()->with('success', 'your review has been deleted successfully');
    }

}
