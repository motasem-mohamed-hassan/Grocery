<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $categories = Category::all();
        $category = Category::find($id);

        return view('front.category', compact('categories', 'category'));

    }
}
