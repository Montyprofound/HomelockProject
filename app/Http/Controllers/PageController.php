<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function security()
    {
        return view('security');
    }

    public function cleaning()
    {
        return view('cleaning');
    }

    public function contact()
    {
        return view('contact');
    }
}