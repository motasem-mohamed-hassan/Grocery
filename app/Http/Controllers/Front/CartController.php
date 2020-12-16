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
                "image"         => asset('storage/products/'.$product->image),
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


        $order                 = new Order();
        $order->user_id        = Auth::id();
        $order->full_name      = $request->full_name;
        $order->phone          = $request->phone;
        $order->address        = $request->address;
        $order->city           = $request->city;
        $order->address_type   = $request->address_type;
        $order->save();

        foreach(\Cart::getContent() as $product)
        {
            $opj = new order_product();
            $opj->order_id = $order->id;
            $opj->product_id = $product['id'];
            $opj->product_price = $product['price'];
            $opj->product_quantity = $product['quantity'];
            $opj->total = $product['price'] * $product['quantity'];
            $opj->save();

            $table = Product::find($product['id']);
            $table->decrement('stock', $opj->product_quantity);
            $table->increment('order_count', $opj->product_quantity);

        }

        $order->total = \Cart::getTotal();
        $order->save();

        \Cart::clear();

        return redirect()->route('home')->with('success','Your order have been sent successfuly!');;

    }



}
