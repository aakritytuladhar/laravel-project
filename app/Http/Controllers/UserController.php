<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash:: check($req->password,$user->password)){
            return "User name or password is wrong";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/home');
        }
    }
    function Register(Request $req){
        // return $req->input();
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
       return redirect('/login');
    }
}
