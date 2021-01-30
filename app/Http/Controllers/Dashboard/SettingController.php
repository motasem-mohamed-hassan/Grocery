<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('dashboard.setting.index', compact('setting'));
    }

    public function update($id, Request $request)
    {
        $setting = Setting::find($id);
        $setting->phone1        = $request->phone1;
        $setting->phone2        = $request->phone2;
        $setting->location      = $request->location;
        $setting->facebook      = $request->facebook;
        $setting->twitter       = $request->twitter;
        $setting->instegram     = $request->instegram;
        $setting->description  = $request->description;

        $setting->save();

        return redirect()->back();

    }
}
