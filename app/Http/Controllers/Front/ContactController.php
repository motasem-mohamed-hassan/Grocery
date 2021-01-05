<?php

namespace App\Http\Controllers\Front;

use App\Category;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('front.contact', compact('categories'));
    }


    public function store()
    {
        $data = request()->validate([
            'name'      => 'required',
            'subject'   => 'required',
            'email'     => 'required|email',
            'message'   => 'required',
        ]);

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect()->route('home')->with('success', 'Your email has been sent successfully!');


    }

}