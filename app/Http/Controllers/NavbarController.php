<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{
    public function live(){
    	$total = 4;
    	// $live = DB::table('live')->get();
    	// return view('live',['total' => $total, 'live' => $live]);
    	return view('live', ['total' => $total]);
	}

	public function streaming($id){
		$total = 4;
  //   	$live = DB::table('live')->get();
		// $stream = DB::table('live')->where('id',$id)->get();
		// return view('streaming',['stream' => $stream, 'total' => $total, 'live' => $live]);
	}
 
	public function shopping(){
		$total = 4;
		return view('shopping', ['total' => $total]);
	}
 
	public function sosmed(){
		return view('sosmed');
    }
    
    public function info(){
		return view('info');
	}

	public function barang(){
		return view('barang');
	}

	public function test(){
		return view('test');
	}
}
