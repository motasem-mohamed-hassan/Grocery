<?php

namespace App\Http\Controllers\Dashboard;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $user = Auth::user();

        return view('dashboard.setting.index', compact('setting', 'user'));
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


        $computer_paner_url = $request->file('computer_paner');
        $computer_paner_url->getClientOriginalName();
        $ext    = $computer_paner_url->getClientOriginalExtension();
        $file   = date('YmdHis').rand(1,99999).'.'.$ext;
        $computer_paner_url->storeAs('public/avatars', $file);
        Storage::disk('local')->delete('public/avatars/'.$setting->computer_paner);
        $setting->computer_paner = $file;

        $mobile_paner_url = $request->file('mobile_paner');
        $mobile_paner_url->getClientOriginalName();
        $ext    = $mobile_paner_url->getClientOriginalExtension();
        $file   = date('YmdHis').rand(1,99999).'.'.$ext;
        $mobile_paner_url->storeAs('public/avatars', $file);
        Storage::disk('local')->delete('public/avatars/'.$setting->mobile_paner);
        $setting->mobile_paner = $file;



        $setting->description  = $request->description;


        $setting->save();

        return redirect()->back();

    }
}
