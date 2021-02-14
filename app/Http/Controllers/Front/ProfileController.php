<?php

namespace App\Http\Controllers\Front;

use App\User;

use App\Setting;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($id)
    {
        $categories = Category::where('parent_id', null)->get();
        $user       = User::findOrFail($id);
        $setting = Setting::find('1');

        return view('front.profile', compact('categories', 'user', 'setting'));
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

    public function avater(Request $request,$id)
    {
        $avatarurl = $request->file('image');
        $avatarurl->getClientOriginalName();
        $ext    = $avatarurl->getClientOriginalExtension();
        $file   = date('YmdHis').rand(1,99999).'.'.$ext;
        $avatarurl->storeAs('public/avatars', $file);
        $user = User::find($id);
        $user->image = $file;
        $user->save();

        toastr()->success('تم اضافة الصورة بنجاح');
        return redirect()->back();


    }
}
