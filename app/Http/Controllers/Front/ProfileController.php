<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($id)
    {
        $categories = Category::where('parent_id', null)->get();
        $user       = User::find($id);

        return view('front.profile', compact('categories', 'user'));
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());
        $user->name  =  $request->name;
        $user->email    = $request->email;
        $user->phone_number = $request->phone_number;
        $user->save();

        return redirect()->back();
    }
}
