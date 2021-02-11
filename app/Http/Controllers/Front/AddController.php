<?php

namespace App\Http\Controllers\Front;

use App\Image;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AddController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();

        return view('front.add', compact('categories'));
    }

    public function choseSub(Request $request)
    {

        $subCategories = Category::where('parent_id', $request->id)->get();

        return response()->json([
            'status'    => true,
            'data'      => $subCategories
        ]);
    }

    public function category(Request $request)
    {
        $categories = Category::where('parent_id', null)->get();
        $category = Category::where('id', $request->category_id)->first();
        $category_id = $request->category_id;
        $subCategory_id = $request->subCategory_id;
        return view('front.add_product', compact('categories', 'category','subCategory_id'));
    }

    public function store( AddRequest $request)
    {
        $product = new Product();
        $product->user_id           =    Auth::id();
        $product->category_id       =    $request->category_id;
        $product->subCategory_id	=    $request->subCategory_id;

        $product->name              =    $request->name;

        $product->manufactureYear   =    $request->manufactureYear ;
        $product->wheelType         =    $request->wheelType ;
        $product->product           =    $request->product ;
        $product->machinesPlace     =    $request->machinesPlace ;
        $product->machinesType      =    $request->machinesType ;
        $product->machinesPower     =    $request->machinesPower ;
        $product->machinesAge       =    $request->machinesAge ;
        $product->capleType         =    $request->capleType ;
        $product->age               =    $request->age ;
        $product->transmissionType  =    $request->transmissionType ;
        $product->kilometers        =    $request->kilometers ;
        $product->engineCapacity    =    $request->engineCapacity ;
        $product->screensize        =    $request->screensize ;
        $product->memory            =    $request->memory ;
        $product->storage           =    $request->storage ;
        $product->generation        =    $request->generation ;
        $product->color             =    $request->color ;
        $product->accessories       =    $request->accessories ;
        $product->processor         =    $request->processor ;
        $product->coolingPower      =    $request->coolingPower ;
        $product->coolingType       =    $request->coolingType ;
        $product->capacitance       =    $request->capacitance ;
        $product->megapixel         =    $request->megapixel ;
        $product->screenType        =    $request->screenType ;
        $product->length            =    $request->length ;
        $product->machinesNumber    =    $request->machinesNumber ;
        $product->size              =    $request->size ;
        $product->manufactureType   =    $request->manufactureType ;
        $product->fuelType          =    $request->fuelType ;
        $product->energy            =    $request->energy ;


        $product->description       =   $request->description;
        $product->price             =   $request->price;
        $product->status            =   0;
        $product->save();

        $images = $request->file('image');
        foreach($images as $key =>$image)
        {
            if($request->image[$key]->getClientOriginalName()) {
                $ext    = $image->getClientOriginalExtension();
                $file   = date('YmdHis').rand(1,99999).'.'.$ext;
                $image->storeAs('public/products', $file);
            }

            $imag = new Image();
            $imag->product_id   = $product->id;
            $imag->url          = $file;
            $imag->save();

        }


        return redirect()->route('home')->with('msg', 'waiting for approved');
    }

}
