<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show($id)
    {
        return "User ID: " . $id;
    }
}
