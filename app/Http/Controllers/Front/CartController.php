<?php

namespace App\Http\Controllers\Front;

use App\User;
use App\Order;
use App\Product;
use App\Category;
use App\order_product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        $items = \Cart::getContent();
        $categories = Category::all();
        $total = \Cart::getTotal();


        return view('Front.cart', compact('categories', 'items', 'total'));

    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        \Cart::add(array(
            "id"            => $product->id,
            "name"          => $product->name,
            "quantity"      => 1,
            "price"         => $product->price,
            'attributes'    => array(
                "image"         => asset('storage/products/'.$product->first_image->url),
            ),
        ));
        return redirect()->back();

    }

    public function delete($id)
    {
        \Cart::remove($id);
        return redirect()->back();
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



        foreach(\Cart::getContent() as $product)
        {
            $order                 = new Order();
            $order->user_id        = Auth::id();
            $order->full_name      = $request->full_name;
            $order->phone          = $request->phone;
            $order->address        = $request->address;
            $order->city           = $request->city;
            $order->address_type   = $request->address_type;

            $order->product_id  = $product['id'];
            $order->product_name  = $product['name'];
            $order->price       = $product['price'];
            $order->quantity    = $product['quantity'];
            $order->total       = $product['price'] * $product['quantity'];
            $order->save();

            $table = Product::find($product['id']);
            $table->decrement('stock', $order->quantity);
            $table->increment('order_count', $order->quantity);

        }

        $order->save();

        \Cart::clear();

        return redirect()->route('home')->with('success','Your order have been sent successfuly!');;

    }



}
