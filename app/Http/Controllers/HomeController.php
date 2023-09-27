<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.Home') ;
    }
    /* Join Us Page */
    public function join_us()
    {
        return view('site.join_us') ;
    }
}
