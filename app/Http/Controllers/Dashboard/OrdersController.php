<?php

namespace App\Http\Controllers\Dashboard;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('dashboard.orders.index', compact('orders'));
    }

    public function approved(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->back();
    }
}
