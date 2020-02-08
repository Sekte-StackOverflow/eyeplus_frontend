<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{
    public function live(){
    	$total = 4;
    	$video = DB::table('video')->get();
    	return view('live', ['total' => $total, 'video'=>$video]);
	}

	public function streaming($id){
		$total = 4;
    	$video = DB::table('video')->get();
		$stream = DB::table('video')->where('id',$id)->get();

		return view('streaming', ['total' => $total
			, 'stream' => $stream, 'video'=>$video]);
	}
 
	public function shopping(){
		$total = 4;

		$array = [
			"id"=>[
				"1", "2", "3", "4", "5"
			],
		  "product" => [
		      "iwater.png", "Kasur-web.png", "thumbnail.jpg", "colocasia.png", "thumbnail1.jpg"
		  ],
		  "harga" => [
		      "1210000", "1110000", "180000", "180000", "1480000"
		  ],
		  "hargaasli" => [
		    "1480000", "1480000", "9990000", "898000", "2500000"
		  ],
		  "diskon" => [
		    "40%", "20%", "35%", "35%", "45%"
		  ]
		];

		return view('shop', ['total' => $total, 'array'=>$array]);
	}
 
	public function sosmed(){
		$link = DB::table('sosmed')->get();
		return view('sosmed', ['link'=>$link]);
    }
    
    public function info(){
		return view('info');
	}

	public function barang($id){
		$idbarang = $id;
		$array = [
			"id"=>[
				"1", "2", "3", "4", "5"
			],
		  	"product" => [
		      	"iwater.png", "Kasur-web.png", "thumbnail.jpg", "colocasia.png", "thumbnail1.jpg"
		  	],
		  "harga" => [
		      "1210000", "1110000", "180000", "180000", "1480000"
		  ],
		  "hargaasli" => [
		    "1480000", "1480000", "9990000", "898000", "2500000"
		  ],
		  	"diskon" => [
		    	"40%", "20%", "35%", "35%", "45%"
		  	],
		  	"youtube" => [
		  		"eUZe0VNYSVM", "kB4UvComcEE", "4VmFR3v64K0", "0QwMbdhzQzw", "0nuvRZ5rU40"
		  	]
		];
		return view('barang', ['array'=> $array, 'idbarang'=>$idbarang]);
	}

	public function test(){
		return view('test');
	}
}

