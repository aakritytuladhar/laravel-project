<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Banner;
class HomeController extends Controller
{
    function index2(){
        $data=Home::all();
        $data2=Banner::all();
        return view('home',['homes'=>$data],['banners'=>$data2]);
    }
}
