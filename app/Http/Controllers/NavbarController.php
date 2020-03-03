<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use Auth;

class NavbarController extends Controller
{
    
    public function live(){
    	//poster video
    	$poster = DB::table('video')->where('status', 'active')->orderBy('order_rec', 'ASC')->first();
    	//video
    	$video = DB::table('video')->where('status', 'active')->orderBy('order_rec', 'ASC')->get();
    	// banner
    	$bannerfirst = DB::table('banner')->where('tipe', 'Channel')->first();
		$count = DB::table('banner')->where('tipe', 'Channel')->count();
		$bannernext = DB::table('banner')->where('tipe', 'Channel')->skip(1)->take($count)->get();
		//banner-mini
		$bannerminifirst = DB::table('banner')->where('tipe', 'Produk-mini')->first();
		$countmini = DB::table('banner')->where('tipe', 'Produk-mini')->count();
		$bannermininext = DB::table('banner')->where('tipe', 'Produk-mini')->skip(1)->take($countmini)->get();
		// popup
		$popup = DB::table('banner')->where('tipe', 'Popup')->first();
		//appsetting
		$appsetting = DB::table('appsetting')->first();

    	return view('live', ['video'=>$video, 'bannerfirst'=>$bannerfirst, 'bannernext'=>$bannernext, 'count'=>$count, 'appsetting'=>$appsetting, 'popup'=>$popup, 'poster'=>$poster, 'bannerminifirst'=>$bannerminifirst, 'bannermininext'=>$bannermininext, 'countmini'=>$countmini]);
	}

	public function streamingpost(Request $request){
	if (!Auth::guest()){
		$activity = DB::table('activity')->where('activity', $request->activity)->where('iduser', $request->iduser)->get();
		if (!$activity -> isEmpty()) {
			foreach ($activity as $a) {
				$totalview = $a->fvw;
				DB::table('activity')->where('activity',$request->activity)->where('iduser', $request->iduser)->update([
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
				DB::table('activity')->where('activity',$request->activity)->where('iduser', $request->iduser)->update([
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
				DB::table('activity')->where('activity',$request->activity)->where('iduser', $request->iduser)->update([
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
		//appsetting
		$appsetting = DB::table('appsetting')->first();
		return view('modal', ['appsetting' => $appsetting]);
	}

	public function streaming($id){
    	$video = DB::table('video')->where('status', 'active')->orderBy('order_rec', 'ASC')->get();
		$stream = DB::table('video')->where('id',$id)->get();
		//banner
		$bannerfirst = DB::table('banner')->where('tipe', 'Channel')->first();
		$count = DB::table('banner')->where('tipe', 'Channel')->count();
		$bannernext = DB::table('banner')->where('tipe', 'Channel')->skip(1)->take($count)->get();
		//banner-mini
		$bannerminifirst = DB::table('banner')->where('tipe', 'Produk-mini')->first();
		$countmini = DB::table('banner')->where('tipe', 'Produk-mini')->count();
		$bannermininext = DB::table('banner')->where('tipe', 'Produk-mini')->skip(1)->take($countmini)->get();
		//appsetting
		$appsetting = DB::table('appsetting')->first();

		return view('streaming', ['stream' => $stream, 'video'=>$video, 'bannerfirst'=>$bannerfirst, 'bannernext'=>$bannernext, 'count'=>$count,'appsetting'=>$appsetting, 'bannerminifirst'=>$bannerminifirst, 'bannermininext'=>$bannermininext, 'countmini'=>$countmini]);
	}

	public function subscribe($id){
    	$video = DB::table('video')->where('status', 'active')->orderBy('order_rec', 'ASC')->get();
		$stream = DB::table('video')->where('id',$id)->get();
		// banner
		$bannerfirst = DB::table('banner')->where('tipe', 'Channel')->first();
		$count = DB::table('banner')->where('tipe', 'Channel')->count();
		$bannernext = DB::table('banner')->where('tipe', 'Channel')->skip(1)->take($count)->get();
		//banner-mini
		$bannerminifirst = DB::table('banner')->where('tipe', 'Produk-mini')->first();
		$countmini = DB::table('banner')->where('tipe', 'Produk-mini')->count();
		$bannermininext = DB::table('banner')->where('tipe', 'Produk-mini')->skip(1)->take($countmini)->get();
		//appsetting
		$appsetting = DB::table('appsetting')->first();

		return view('subscribe', ['stream' => $stream, 'video'=>$video, 'bannerfirst'=>$bannerfirst, 'bannernext'=>$bannernext, 'count'=>$count,'appsetting'=>$appsetting, 'bannerminifirst'=>$bannerminifirst, 'bannermininext'=>$bannermininext, 'countmini'=>$countmini]);
	}
 
	public function shopping(){
		//banner-mini
		$bannerminifirst = DB::table('banner')->where('tipe', 'Produk-mini')->first();
		$countmini = DB::table('banner')->where('tipe', 'Produk-mini')->count();
		$bannermininext = DB::table('banner')->where('tipe', 'Produk-mini')->skip(1)->take($countmini)->get();
		//banner
		$produk = DB::table('produk')->where('status', 'publish')->orderBy('order_rec', 'ASC')->get();
		$bannerfirst = DB::table('banner')->where('tipe', 'Produk')->first();
		$count = DB::table('banner')->where('tipe', 'Produk')->count();
		$bannernext = DB::table('banner')->where('tipe', 'Produk')->skip(1)->take($count)->get();
		// return $count;
		//appsetting
		$appsetting = DB::table('appsetting')->first();

		return view('shop', ['produk'=>$produk, 'bannerfirst' =>$bannerfirst, 'bannernext'=>$bannernext, 'count'=>$count, 'appsetting'=>$appsetting, 'bannerminifirst'=>$bannerminifirst, 'bannermininext'=>$bannermininext, 'countmini'=>$countmini]);
	}
 
	public function sosmed(){
		$link = DB::table('sosme')->where('id', 1)->get();
		$link2 = DB::table('sosme')->where('id', 2)->get();
		$link3 = DB::table('sosme')->where('id', 3)->get();
		// banner
		$banner = DB::table('banner')->where('tipe','Sosmed')->first();
		//banner-mini
		$bannerminifirst = DB::table('banner')->where('tipe', 'Produk-mini')->first();
		$countmini = DB::table('banner')->where('tipe', 'Produk-mini')->count();
		$bannermininext = DB::table('banner')->where('tipe', 'Produk-mini')->skip(1)->take($countmini)->get();
		//appsetting
		$appsetting = DB::table('appsetting')->first();

		return view('sosmed', ['link'=>$link, 'banner'=>$banner, 'appsetting'=>$appsetting, 'link2'=>$link2, 'link3'=>$link3, 'bannerminifirst'=>$bannerminifirst, 'bannermininext'=>$bannermininext, 'countmini'=>$countmini]);
    }
    
    public function info(){
		$appsetting = DB::table('appsetting')->first();
		//banner-mini
		$bannerminifirst = DB::table('banner')->where('tipe', 'Produk-mini')->first();
		$countmini = DB::table('banner')->where('tipe', 'Produk-mini')->count();
		$bannermininext = DB::table('banner')->where('tipe', 'Produk-mini')->skip(1)->take($countmini)->get();

		return view('info', ['appsetting' => $appsetting, 'bannerminifirst'=>$bannerminifirst, 'bannermininext'=>$bannermininext, 'countmini'=>$countmini]);
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
		$appsetting = DB::table('appsetting')->first();
		//banner-mini
		$bannerminifirst = DB::table('banner')->where('tipe', 'Produk-mini')->first();
		$countmini = DB::table('banner')->where('tipe', 'Produk-mini')->count();
		$bannermininext = DB::table('banner')->where('tipe', 'Produk-mini')->skip(1)->take($countmini)->get();

		return view('info', ['appsetting' => $appsetting, 'bannerminifirst'=>$bannerminifirst, 'bannermininext'=>$bannermininext, 'countmini'=>$countmini]);
	}

	public function barang($id){
		$idbarang = $id;
		$produk = DB::table('produk')->where('id',$id)->get();
		$template = DB::table('template')->where('idproduk',$id)->get();
		// $template = "1";
		//appsetting
		$appsetting = DB::table('appsetting')->first();

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
		//banner-mini
		$bannerminifirst = DB::table('banner')->where('tipe', 'Produk-mini')->first();
		$countmini = DB::table('banner')->where('tipe', 'Produk-mini')->count();
		$bannermininext = DB::table('banner')->where('tipe', 'Produk-mini')->skip(1)->take($countmini)->get();

		return view('barang', ['array'=> $array, 'idbarang'=>$idbarang, 'produk'=>$produk, 'template'=>$template, 'appsetting'=>$appsetting, 'bannerminifirst'=>$bannerminifirst, 'bannermininext'=>$bannermininext, 'countmini'=>$countmini]);
	}

	public function test(){
		return view('test');
	}

	public function streamingputAPI(Request $request){
	if ($request->iduser != null){
		$activity = DB::table('activity')->where('activity', $request->activity)->where('iduser', $request->iduser)->get();
		if (!$activity -> isEmpty()) {
			foreach ($activity as $a) {
				$totalview = $a->fva;
				DB::table('activity')->where('activity',$request->activity)->where('iduser', $request->iduser)->update([
					'fva' => $totalview+1,
					'update_tb' => new DateTime()
				]);
			}
			
		}else{
			DB::table('activity')->insert([
			'iduser' => $request->iduser,
			'activity' => $request->activity,
			'fva' => 1,
			'create_tb' => new DateTime(),
			]);
		}
	}
		$video = DB::table('video')->where('id', $request->id)->get();
		foreach ($video as $v) {
			$totalview = $v->watching_a;
			DB::table('video')->where('id', $request->id)->update([
				'watching_a' => $totalview+1
			]);
		}
		return response()->json(['response' => array('status' => '200', 'message' => 'success')], 200);
	}

	public function produkputAPI(Request $request){
	if ($request->iduser != null){
		$activity = DB::table('activity')->where('activity', $request->activity)->where('iduser', $request->iduser)->get();
		if (!$activity -> isEmpty()) {
			foreach ($activity as $a) {
				$totalview = $a->pva;
				DB::table('activity')->where('activity',$request->activity)->where('iduser', $request->iduser)->update([
					'pva' => $totalview+1,
					'update_tb' => new DateTime()
				]);
			}
			
		}else{
			DB::table('activity')->insert([
			'iduser' => $request->iduser,
			'activity' => $request->activity,
			'pva' => 1,
			'create_tb' => new DateTime(),
			]);
		}
	}
		$produk = DB::table('produk')->where('id', $request->id)->get();
		foreach ($produk as $v) {
			$totalview = $v->watching_a;
			DB::table('produk')->where('id', $request->id)->update([
				'watching_a' => $totalview+1
			]);
		}
		return response()->json(['response' => array('status' => '200', 'message' => 'success')], 200);
	}
}

