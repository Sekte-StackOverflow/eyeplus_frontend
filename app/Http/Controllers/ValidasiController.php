<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\User;
use Redirect;
use Auth;
use URL;
use Illuminate\Support\Facades\DB;
use DateTime;

class ValidasiController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['auth'=>'verified']);
    // }

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
        if (!Auth::guest()){
            return redirect()->route('live');
        }
        $ket = "";
        $News = "1";
		return view('register',['ket' => $ket, 'News'=>$News]);
    }

    public function register_id($id, $New){
        if (!Auth::guest()){
            return redirect()->route('live');
        }        
        $ket = "0".$id;
        $News = $New;
        return view('register', ['ket' => $ket, 'News'=>$News]);
    }

    public function register_null($New){
        if (!Auth::guest()){
            return redirect()->route('live');
        }        
        $ket = "";
        $News = $New;
        return view('register', ['ket' => $ket, 'News'=>$News]);
    }

    public function registeremail(){
        if (!Auth::guest()){
            return redirect()->route('live');
        }
        $ket = "";
        $News = "1";
        return view('registeremail',['ket' => $ket, 'News'=>$News]);
    }
    public function registeremail_id($id, $New){
        if (!Auth::guest()){
            return redirect()->route('live');
        }
        $ket = $id;
        $News = $New;
        return view('registeremail', ['ket' => $ket, 'News'=>$News]);
    }

	public function postregister(Request $request){

        $this->validate($request, [

            'email'=> 'required|unique:clients',
            'password' => 'required|min:8|confirmed'
        ]);
    	User::create ([
            'name' => "none",
            'status' => "1",
            'tipe_register' => "Phone",
            'profile' => " no_image.jpg",
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'tipe_user' => "Website",
            'News' => $request->News,
            'email_verified_at' => new DateTime(),
        ]);

        return redirect()->route('login');

        // $pesan_text = "ini adalah pesan text";

        // $email = $request->detail;

        // $result = DB::table('client')
        //         ->select('slw')
        //         ->where('detail', $email)->first();
         

        // foreach ($result as $r) {
        //     $data = array(
        //         'name' => $request->name,
        //         'email_body' => $pesan_text,
        //         'token' => $r,
        //         'url' => URL::to('/token/'.$email)
        //     );
        // }

        // // Kirim Email
        // Mail::send('email_template', $data, function($mail) use($email) {
        //     $mail->to($email, 'no-reply')
        //             ->subject("Sample Email Laravel");
        //     $mail->from('letsplay09.lp@gmail.com', 'Testing');
        // });

        // // Cek kegagalan
        // if (Mail::failures()) {
        //     return "Gagal mengirim Email";
        // }
        // // return "Email berhasil dikirim!";

        // return Redirect::to('/token/'.$email);
    }

    public function forgotpassword(){
        return view('forgotpassword');
		// return Redirect::to('/forgotpassword/hernanda');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('live');
    }

    public function token($email){
        $email = $email;

        $result = DB::table('clients')
                ->select('slw')
                ->where('detail', $email)->first();
         
        foreach ($result as $r) {    
            return view('token', ['email' => $email, 'token'=>$r]);
        }
    }

    public function test($email){
            return view('forgotpassword');
    }
}
