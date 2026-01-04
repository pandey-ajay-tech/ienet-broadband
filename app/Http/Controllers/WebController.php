<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about(Request $request)
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function plans()
    {
        return view('pages.packages-carousel');
    }

    public function quickRecharge()
    {
        return view('pages.quick-recharge');
    }

    public function myAccount()
    {
        return view('pages.my-account');
    }

    public function bookNow()
    {
        return view('pages.book-now');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
