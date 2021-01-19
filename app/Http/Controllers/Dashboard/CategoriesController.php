<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('dashboard.categories.index', compact('categories'));
    }


    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        //for msg in ajax code
        if($category)
            return response()->json([
                'status' => true,
                'msg'    => 'Category save successfully',
                'data'     => $category
            ]);
        else
            return response()->json([
                'status' => false,
                'msg'    => 'try again'
            ]);
    }

    public function edit(Request $request)
    {
        $category = Category::find($request->id);

        return response()->json([
            'status' => true,
            'data'     => $category
        ]);
    }

    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->update();

        return response()->json([
            'status' => true,
            'msg'    => 'Category updated successfully',
            'data'     => $category
        ]);
    }

    public function destroy(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();

        return response()->json([
            'status' => true,
            'msg'    => 'Category deleted successfully',
            'id'     => $request->id
        ]);

    }
}
