<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionsController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {

            return redirect()->route('home');

        }
    }

    public function logout()
    {
        auth::logout();
        Session::flush();
        return redirect()->route('home');
    }

}
