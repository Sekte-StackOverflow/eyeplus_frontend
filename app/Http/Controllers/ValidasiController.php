<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ValidasiController extends Controller
{
    public function login(){
		return view('login');
    }

    public function postlogin(Request $request){
    	if(!Auth::attempt(['detail'=>$request->email, 'password'=>$request->password])){
            return redirect()->back();
        }
        return redirect()->route('info');
    }

	public function register(){
		return view('register');
    }

	public function postregister(Request $request){

        $this->validate($request, [

            'detail'=> 'required|unique:client',
            'password' => 'required|min:6|confirmed'
        ]);
    	User::create ([
            'status' => "non-active",
            'tipe_register' => "email",
            'detail' => $request->detail,
            'password' =>bcrypt($request->password),
            'sla' => 0,
            'slw' => 1
        ]);

        return redirect()->route('login');
    }

    public function forgotpassword(){
		return view('forgotpassword');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('live');
    }
}
