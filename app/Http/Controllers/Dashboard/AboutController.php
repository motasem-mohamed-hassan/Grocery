<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = Page::first();
        return view('dashboard.about_us.index', compact('about'));
    }

    public function update($id, Request $request)
    {
        $about = Page::find($id);
        $about->header              = $request->header;
        $about->description         = $request->description;
        $about->video               = $request->video;
        $about->video_description   = $request->video_description;

        $about->save();

        return redirect()->back();
    }
}
