<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;
use Redirect;
use Illuminate\Support\Facades\DB;
  
class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('changePassword');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        // dd('Password change successfully.');
        return redirect()->route('info');

    }

    public function changepasswordAPI(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        
        // DB::table('login')->where('id',$request->id)->update([
        //     'password'=> Hash::make($request->new_password)
        // ]);
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        // dd('Password change successfully.');
        return response()->json(['response' => array('status' => '200', 'message' => 'success')], 200);

    }
}