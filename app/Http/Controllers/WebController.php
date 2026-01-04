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

    public function plans_carousel()
    {
        return view('pages.packages-carousel');
    }

    public function plans_pricing()
    {
        return view('pages.packages');
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

    public function carousel()
    {
        return view('pages.services-carousel');
    }

    public function fiberBroadband()
    {
        return view('pages.service-d-broadband');
    }

    public function iptv()
    {
        return view('pages.service-d-iptv');
    }

    public function cyberSecurity()
    {
        return view('pages.service-d-cyber-security');
    }

    public function landline()
    {
        return view('pages.service-d-landline');
    }

    public function fireTv()
    {
        return view('pages.service-d-tv');
    }

    public function connectivity()
    {
        return view('pages.service-d-connectivity');
    }
}
