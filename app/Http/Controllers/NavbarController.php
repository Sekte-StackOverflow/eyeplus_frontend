<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use Auth;

class NavbarController extends Controller
{

	   //  public function __construct()
    // {
    //     $this->middleware(['auth'=>'verified']);
    // }
    
    public function live(){
    	$total = 2;
    	$video = DB::table('video')->where('status', 'active')->get();
    	return view('live', ['total' => $total, 'video'=>$video]);
	}

	public function streamingpost(Request $request){
	if (!Auth::guest()){
		$activity = DB::table('activity')->where('activity', $request->activity)->where('iduser', $request->iduser)->get();
		if (!$activity -> isEmpty()) {
			foreach ($activity as $a) {
				$totalview = $a->fvw;
				DB::table('activity')->where('activity',$request->activity)->update([
					'fvw' => $totalview+1,
					'update_tb' => new DateTime()
				]);
			}
			
		}else{
			DB::table('activity')->insert([
			'iduser' => $request->iduser,
			'activity' => $request->activity,
			'fvw' => 1,
			'create_tb' => new DateTime(),
			]);
		}
	}
		$video = DB::table('video')->where('id', $request->id)->get();
		foreach ($video as $v) {
			$totalview = $v->watching_w;
			DB::table('video')->where('id', $request->id)->update([
				'watching_w' => $totalview+1
			]);
		}
		return redirect('/live/'.$request->id);
	}
	public function subscribepost(Request $request){
		$activity = DB::table('activity')->where('activity', $request->activity)->where('iduser', $request->iduser)->get();
		if (!$activity -> isEmpty()) {
			foreach ($activity as $a) {
				$totalview = $a->fvw;
				DB::table('activity')->where('activity',$request->activity)->update([
					'fvw' => $totalview+1,
					'update_tb' => new DateTime()
				]);
			}
			
		}else{
			DB::table('activity')->insert([
			'iduser' => $request->iduser,
			'activity' => $request->activity,
			'fvw' => 1,
			'create_tb' => new DateTime(),
			]);
		}
		$video = DB::table('video')->where('id', $request->id)->get();
		foreach ($video as $v) {
			$totalview = $v->watching_w;
			DB::table('video')->where('id', $request->id)->update([
				'watching_w' => $totalview+1
			]);
		}
		return redirect('/subscribe/'.$request->id);
	}

	public function barangpost(Request $request){
	if (!Auth::guest()){
		$activity = DB::table('activity')->where('activity', $request->activity)->where('iduser', $request->iduser)->get();
		if (!$activity -> isEmpty()) {
			foreach ($activity as $a) {
				$totalview = $a->pvw;
				DB::table('activity')->where('activity',$request->activity)->update([
					'pvw' => $totalview+1,
					'update_tb' => new DateTime()
				]);
			}
			
		}else{
			DB::table('activity')->insert([
			'iduser' => $request->iduser,
			'activity' => $request->activity,
			'pvw' => 1,
			'create_tb' => new DateTime(),
			]);
		}
	}

		$produk = DB::table('produk')->where('id', $request->id)->get();
		foreach ($produk as $b){
			$totalview = $b->watching_w;
			DB::table('produk')->where('id', $request->id)->update([
				'watching_w' => $totalview+1
			]);
		}
		return redirect('/shopping/'.$request->id);
	}
	public function modal(){
		$appsetting = DB::table('appsetting')->get();
		return view('modal', ['appsetting' => $appsetting]);
	}

	public function streaming($id){
		$total = 2;
    	$video = DB::table('video')->where('status', 'active')->get();
		$stream = DB::table('video')->where('id',$id)->get();

		return view('streaming', ['total' => $total
			, 'stream' => $stream, 'video'=>$video]);
	}

	public function subscribe($id){
		$total = 2;
    	$video = DB::table('video')->where('status', 'active')->get();
		$stream = DB::table('video')->where('id',$id)->get();

		return view('subscribe', ['total' => $total, 'stream' => $stream, 'video'=>$video]);
	}
 
	public function shopping(){
		$produk = DB::table('produk')->where('status', 'publish')->get();
		$total = 2;

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

		return view('shop', ['total' => $total, 'array'=>$array, 'produk'=>$produk]);
	}
 
	public function sosmed(){
		$link = DB::table('sosme')->get();
		$banner = DB::table('banner')->where('tipe','Sosmed')->first();
		return view('sosmed', ['link'=>$link, 'banner'=>$banner]);
    }
    
    public function info(){
    	$appsetting = DB::table('appsetting')->get();
		return view('info', ['appsetting' => $appsetting]);
	}

	public function info_upload(Request $request){
		$this->validate($request, [
			'file' => 'file|image|mimes:jpeg,png,jpg|max:2048',
		]);
		if (!$request->file('file')==null ) {
			# code...
		
		$file = $request->file('file');
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'profil';
 
                // upload file
		$file->move($tujuan_upload,$file->getClientOriginalName());

		DB::table('clients')->where('id',$request->ini_id)->update([
			'profile' => $file->getClientOriginalName(),
			'name' => $request->name,
		]);

		}else{
		DB::table('clients')->where('id',$request->ini_id)->update([
			'name' => $request->name,
		]);
		}
		$appsetting = DB::table('appsetting')->get();
		return view('info', ['appsetting' => $appsetting]);
	}

	public function barang($id){
		$idbarang = $id;
		$produk = DB::table('produk')->where('id',$id)->get();
		$template = DB::table('template')->where('idproduk',$id)->get();
		// $template = "1";
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
		return view('barang', ['array'=> $array, 'idbarang'=>$idbarang, 'produk'=>$produk, 'template'=>$template]);
	}

	public function test(){
		return view('test');
	}
}

