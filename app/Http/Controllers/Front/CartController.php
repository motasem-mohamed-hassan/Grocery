<?php

namespace App\Http\Controllers\Front;

use Auth;
use App\Order;
use App\Product;
use App\Category;
use App\order_product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function index()
    {



        $items = \Cart::session(Session::getId())->getContent();
        $categories = Category::all();
        $total = \Cart::session(Session::getId())->getTotal();
        $itemsCount = \Cart::session(Session::getId())->getTotalQuantity();

        return view('Front.cart', compact('categories', 'items', 'total', 'itemsCount'));

    }

    public function addToCart(Request $request)
    {

        $product = Product::find($request->id);

        \Cart::session(Session::getId())->add(array(
            "id"            => $product->id,
            "name"          => $product->name,
            "quantity"      => 1,
            "price"         => $product->price,
            'attributes'    => array(
                "image"         => asset('storage/products/'.$product->first_image->url),
            ),
        ));

        // \Cart::session(Session::getId())->update($product->id, array(
        //     'quantity'  => 1,
        // ));

        $itemsCount = \Cart::session(Session::getId())->getTotalQuantity();



        return response()->json([
            'status'    => true,
            'msg'       => 'Successfully added to your cart',
            'data'      => $itemsCount,
        ]);

    }

    public function plus(Request $request)
    {
        $product = Product::find($request->id);

        \Cart::session(Session::getId())->update($product->id, array(
            'quantity'  => 1,
        ));

        return response()->json([
            'status' => true,
            'total' => \Cart::session(Session::getId())->getTotal(),
            'priceSum'  => \Cart::get($product->id)->getPriceSum(),
            'id'    => $product->id
        ]);

    }

    public function minus(Request $request)
    {
        $product = Product::find($request->id);

        \Cart::session(Session::getId())->update($product->id, array(
            'quantity'  => -1,
        ));

        return response()->json([
            'status' => true,
            'total' => \Cart::session(Session::getId())->getTotal(),
            'priceSum'  => \Cart::get($product->id)->getPriceSum(),
            'id'    => $product->id
        ]);


    }

    public function delete(Request $request)
    {
        \Cart::session(Session::getId())->remove($request->id);

        return response()->json([
            'status' => true,
            'msg'    => 'Product removed successfully',
            'id'     => $request->id,
            'total' => \Cart::session(Session::getId())->getTotal(),
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'full_name'     => 'required|max:255',
            'phone'         => 'required',
            'address'       => 'required',
            'city'          => 'required',
            'address_type'  => 'required',
        ]);

        $order                 = new Order();
        $order->user_id        = Auth::id();
        $order->full_name      = $request->full_name;
        $order->phone          = $request->phone;
        $order->address        = $request->address;
        $order->city           = $request->city;
        $order->address_type   = $request->address_type;
        $order->save();


        foreach(\Cart::session(Session::getId())->getContent() as $product)
        {
            $op = new order_product();
            $op->order_id = $order->id;
            $op->product_id = $product['id'];
            $op->product_name  =$product['name'];
            $op->price         =$product['price'];
            $op->quantity      =$product['quantity'];
            $op->total         =$product['price'] * $product['quantity'];
            $op->save();

            $table = Product::find($product['id']);
            $table->decrement('stock', $op->quantity);
            $table->increment('order_count', $op->quantity);
        }

        $order->total = \Cart::session(Session::getId())->getTotal();
        $order->save();

        \Cart::session(Session::getId())->clear();

        return redirect()->route('home')->with('success','Your order have been sent successfuly!');

    }



}
