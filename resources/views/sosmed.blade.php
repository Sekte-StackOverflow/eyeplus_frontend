
@extends('master')

@section('heading')

   <div class="video-responsive">
  <div class="embed-responsive embed-responsive-16by9">
  	<img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $banner->web}}" style="width:100%" alt="Image">
  </div>
</div>

@endsection

@section('konten')

<div class="social text-center">
@foreach($link as $link)
  <a class="social-icon" href="{{$link->link}}"  data-tooltip="{{$link->nama}}" target="_blank">
    <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $link->icon }}" width="20px" height="100px" style="border-radius: 50%;">
  </a>
@endforeach
</div>
@endsection

