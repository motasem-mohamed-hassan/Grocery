<?php

namespace App\Http\Controllers\Front;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function show(Request $request, $id)
    {
        $category = Category::where('id', $id)->where('parent_id', null)->firstOrFail();

        $categories     = Category::where('parent_id', null)->get();
        $subCategories    = Category::where('parent_id', '>', 0)->get();



        $query = Product::where('status', 1)->where('category_id', $id)->orWhere('subCategory_id', $id);

        if($request->has('search'))
            $query->where('name', 'LIKE', '%'.$request->search.'%');
        if($request->min && $request->max)
            $query->whereBetween('price', [$request->min, $request->max]);
        if($request->has('subcategory'))
            $query->where('subCategory_id', $request->subcategory);
        if($request->has('screensize'))
            $query->where('screensize', $request->screensize);
        if($request->has('memory'))
            $query->where('memory', $request->memory);
        if($request->has('storage'))
            $query->where('storage', $request->storage);
        if($request->has('generation'))
            $query->where('generation', $request->storage);
        if($request->has('transmissionType'))
            $query->where('transmissionType', $request->transmissionType);
        if($request->has('wheelType'))
            $query->where('wheelType', $request->wheelType);
        if($request->has('fuelType'))
            $query->where('fuelType', $request->fuelType);
        if($request->minmanufactureYear && $request->maxmanufactureYear)
            $query->whereBetween('manufactureYear', [$request->minmanufactureYear, $request->maxmanufactureYear]);
        if($request->has('processor'))
            $query->where('processor', $request->processor);
        if($request->has('coolingPower'))
            $query->where('coolingPower', $request->coolingPower);
        if($request->has('capacitance'))
            $query->where('capacitance', 'LIKE', '%'.$request->capacitance.'%');
        if($request->has('megapixel'))
            $query->where('megapixel', 'LIKE', '%'.$request->megapixel.'%');
        if($request->has('screenType'))
            $query->where('screenType', $request->screenType);
        if($request->has('product'))
            $query->where('product', $request->product);
        if($request->has('length'))
            $query->where('length', 'LIKE', '%'.$request->length.'%');
        if($request->has('machinesPlace'))
            $query->where('length', $request->machinesPlace);
        if($request->has('capleType'))
            $query->where('length', $request->capleType);


        $products = $query->get();


        return view('front.category', compact('products', 'categories', 'category', 'subCategories'));

    }
}
