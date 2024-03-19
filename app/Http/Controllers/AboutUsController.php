<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;
class AboutUsController extends Controller
{
    function aboutUs(){
        return view('aboutus');
    }
    function teams(){
        return view('terms');
    }
    function policy(){
        return view('policy');
    }
    function refund(){
        return view('refund');
    }
}
