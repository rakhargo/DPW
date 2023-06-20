<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use Session;

class C_Session extends Controller
{
    function index(){
        return view("session/login");
    }
    function login(Request $request){
        Session::flash('email', $request->email);

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ], [
            'name.required'=>'Nama Wajib Diisi',
            'email.required'=>'Email Wajib Diisi',
            'password.required'=>'Password Wajib Diisi'
        ]);

        $menglogin = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password

        ];

        if(Auth::attempt($menglogin)){
            return Redirect::to('/tabAdmin');

        }else{
            return redirect('/
            ');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken
        ();
        return Redirect::to('/')->with('success', 'Logout Oke');
    }
}
