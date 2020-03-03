
@extends('master')

@section('heading')

   <div class="video-responsive">
  <div class="embed-responsive embed-responsive-16by9">
  	<img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $banner->web}}" class="banner" alt="Image">
  </div>
</div>

	<style type="text/css">
		.banner{
		height: 100%;
		width: 100%;
		display: block;
		margin: 0 auto;
		position: absolute;
		}
	</style>

@endsection

@section('konten')

<div class="social text-center" >
@foreach($link as $key => $l)
  <a class="social-icon" href="{{$l->youtube}}" data-tooltip="{{ $link3[$key]->youtube }}" target="_blank" style="background-color: #f8f8f8;">
    <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $link2[$key]->youtube }}" width="20px" height="100px" style="border-radius: 50%;">
  </a>
  <a class="social-icon" href="{{$l->instagram}}" data-tooltip="{{ $link3[$key]->instagram }}" target="_blank" style="background-color: #f8f8f8;">
    <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $link2[$key]->instagram }}" width="20px" height="100px" style="border-radius: 50%;">
  </a>
  <a class="social-icon" href="{{$l->facebook}}" data-tooltip="{{ $link3[$key]->facebook }}" target="_blank" style="background-color: #f8f8f8;">
    <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $link2[$key]->facebook }}" width="20px" height="100px" style="border-radius: 50%;">
  </a>
  <a class="social-icon" href="{{$l->twitter}}" data-tooltip="{{ $link3[$key]->twitter }}" target="_blank" style="background-color: #f8f8f8;">
    <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $link2[$key]->twitter }}" width="20px" height="100px" style="border-radius: 50%;">
  </a>
  <a class="social-icon" href="{{$l->pinterest}}" data-tooltip="{{ $link3[$key]->pinterest }}" target="_blank" style="background-color: #f8f8f8;">
    <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $link2[$key]->pinterest }}" width="20px" height="100px" style="border-radius: 50%;">
  </a>
  <a class="social-icon" href="{{$l->linkedin}}" data-tooltip="{{ $link3[$key]->linkedin }}" target="_blank" style="background-color: #f8f8f8;">
    <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $link2[$key]->linkedin }}" width="20px" height="100px" style="border-radius: 50%;">
  </a>  
@endforeach
</div>

@endsection

