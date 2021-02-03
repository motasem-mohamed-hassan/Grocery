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
        $categories = Category::with('children')->whereNull('parent_id')->get();

        return view('dashboard.categories.index', compact('categories'));
    }


    public function store(Request $request)
    {

        $validatedData = $this->validate($request, [
            'name'      => 'required|min:3|max:255|string',
            'parent_id' => 'sometimes|nullable|numeric'
        ]);

        Category::create($validatedData);

        return redirect()->back()->withSuccess('You have successfully created a Category!');
        // $category = new Category();
        // $category->name = $request->name;
        // $category->save();


        // return response()->json([
        //     'status' => true,
        //     'msg'    => 'Category saved successfully',
        //     'data'     => $category
        // ]);
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
            'data'     => $category,
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
