
@extends('master')


@section('heading')
  <img src="https://1.bp.blogspot.com/-RI22TMdzSJk/WgmxvNJMWAI/AAAAAAAAFwg/7DIp4G5wxR8BD0uEItY4UjF4oKB8QZZagCLcBGAs/s1600/Sosmed.jpg" class="img-rounded" style="width:100%" alt="Image">
@endsection

@section('konten')

<div class="social text-center">
@foreach($link as $link)
  <a class="social-icon" data-tooltip="Youtube" href="{{$link->youtube}}" target="_blank">
    <img src="{{ URL::to('/image/youtube.png') }}" width="100%" height="100%">
  </a>
  <a class="social-icon" data-tooltip="Instagram" href="{{$link->instagram}}" target="_blank">
    <img src="{{ URL::to('/image/instagram.png') }}" width="100%" height="100%">
  </a>
  <a class="social-icon" data-tooltip="Facebook" href="{{$link->facebook}}" target="_blank">
    <img src="{{ URL::to('/image/facebook.png') }}" width="100%" height="100%">
  </a>
  <a class="social-icon" data-tooltip="Twitter" href="{{$link->twitter}}" target="_blank">
    <img src="{{ URL::to('/image/twitter.png') }}" width="100%" height="100%">
  </a>
  <a class="social-icon" data-tooltip="Pinterest" href="{{$link->pinterest}}" target="_blank">
    <img src="{{ URL::to('/image/pinterest.png') }}" width="100%" height="100%">
  </a>
  <a class="social-icon" data-tooltip="LinkedIn" href="{{$link->linkedin}}" target="_blank"s>
    <img src="{{ URL::to('/image/linkedin.png') }}" width="100%" height="100%">
  </a>
@endforeach
</div>
@endsection

