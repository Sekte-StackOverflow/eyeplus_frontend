<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function formemail()
    {
        return view('sendemail');
    }

    // Fungsi mengirim email
    public function sendEmail(Request $request){
        // Siapkan Data
        $email = $request->email;
        $data = array(
                'name' => $request->name,
                'email_body' => $request->email_body
            );

        // Kirim Email
        Mail::send('email_template', $data, function($mail) use($email) {
            $mail->to($email, 'no-reply')
                    ->subject("Sample Email Laravel");
            $mail->from('letsplay09.lp@gmail.com', 'Testing');
        });

        // Cek kegagalan
        if (Mail::failures()) {
            return "Gagal mengirim Email";
        }
        return "Email berhasil dikirim!";
    }
}