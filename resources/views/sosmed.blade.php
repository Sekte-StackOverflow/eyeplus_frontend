
@extends('master')


@section('heading')
  <img src="https://1.bp.blogspot.com/-RI22TMdzSJk/WgmxvNJMWAI/AAAAAAAAFwg/7DIp4G5wxR8BD0uEItY4UjF4oKB8QZZagCLcBGAs/s1600/Sosmed.jpg" class="img-rounded" style="width:100%" alt="Image">
@endsection

@section('konten')

<div class="social text-center">

  <a class="social-icon" data-tooltip="youtube.com" href="">
    <img src="{{ URL::to('/image/youtube.png') }}" width="100%" height="100%">
  </a>
  <a class="social-icon" data-tooltip="Instagram" href="">
    <img src="{{ URL::to('/image/instagram.png') }}" width="100%" height="100%">
  </a>
  <a class="social-icon" data-tooltip="Facebook" href="">
    <img src="{{ URL::to('/image/facebook.png') }}" width="100%" height="100%">
  </a>
  <a class="social-icon" data-tooltip="Twitter" href="">
    <img src="{{ URL::to('/image/twitter.png') }}" width="100%" height="100%">
  </a>
  <a class="social-icon" data-tooltip="Facebook"">
    <img src="{{ URL::to('/image/facebook.png') }}" width="100%" height="100%">
  </a>
  <a class="social-icon" data-tooltip="Pinterest" href="">
    <img src="{{ URL::to('/image/pinterest.png') }}" width="100%" height="100%">
  </a>
  <a class="social-icon" data-tooltip="LinkedIn" href="">
    <img src="{{ URL::to('/image/linkedin.png') }}" width="100%" height="100%">
  </a>

</div>
@endsection

