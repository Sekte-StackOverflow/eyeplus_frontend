@extends('master')

@section('heading')
<div class="video-responsive">
  <div class="embed-responsive embed-responsive-16by9">
    <video id="videojs-hls-quality-selector-player" class="video-js vjs-default-skin embed-responsive-item vjs-nofull" poster="{{ asset('image/banner/images.jpg' ) }}" 
    style="position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit:fill;
    border:0" controls autoplay loop playsinline >

@foreach($array['id'] as $key => $id)
@if($id == $idstream)
<source type="application/x-mpegURL" src="{{ $array['link'][$key] }}">
<!-- <source type="application/x-mpegURL" src="https://stream.suryaiptv.net/streams/40_.m3u8">  --> 
<!-- kadrama -->
<!-- <source type="application/x-mpegURL" src="https://stream.suryaiptv.net/streams/125_.m3u8">  -->
<!-- lejel live -->
@endif
@endforeach 
  </div>

<script type="text/javascript" src="{{URL::asset('videojs/vjs/node_modules/video.js/dist/video.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('videojs/vjs/node_modules/videojs-contrib-quality-levels/dist/videojs-contrib-quality-levels.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('videojs/vjs/dist/videojs-hls-quality-selector.js')}}"></script>
   <script>
    (function(window, videojs) {
      var player = window.player = videojs('videojs-hls-quality-selector-player');
      player.hlsQualitySelector({
          displayCurrentQuality: true,
      });
    }(window, window.videojs));
  </script>

</div>
@endsection

@section('banner')
  <div class="row " >
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @for ($i = 0 ; $i <= $total ; $i++)
        <li data-target="#myCarousel" data-slide-to="$i"></li>
        @endfor
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner img-center " role="listbox">
        <div class="item active">
          <img src="{{ asset('image/banner/1.jpg') }}" alt="Image"> 
        </div>
        <div class="item ">
          <img src="{{ asset('image/banner/2.jpg') }}" alt="Image"> 
        </div>
        <div class="item ">
          <img src="{{ asset('image/banner/3.jpg') }}" alt="Image"> 
        </div>

        <!-- @for ($i = 0 ; $i <= $total-1; $i++)
        <div class="item" >
          <img src="{{ asset('image/baner/4.jpg') }}" alt="Image">     
        </div>
        @endfor -->
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control padding" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control padding" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div><br><br>
@endsection


@section('konten')
<main>
      <section class="cards">
        @foreach($array['id'] as $key => $id)
        <article>
          <!-- <a href="live/{{$i}}"> -->
          <a href="../live/{{ $id }}">
            <img class="article-img" src="{{ asset('image/Live Video/'.$array['poster'][$key] ) }}" alt=" " />
            <h4 class="article-title">{{$array['name'][$key]}}</h4>
            <div class="watching">1000 menonton</div>
            <font class="live">LIVE
            </font>
          </a>
        </article>
        @endforeach

      </section>
    </main>


<style type="text/css">
@media screen and (max-width: 601px) {
.cards {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
  grid-gap: 10px;
}

.carousel-inner img {
      max-height: 100px;
      /*object-fit: cover;*/
      min-height: 100px;
      width: 100%;
      padding-left: 20px;
      padding-right: 20px;
    }
}

.padding{
  margin: 0px 20px 0px 20px;
}

.article-title {
  position: absolute;
  top: 67.5px;
  right: 0px;
  color: white;
  width: 100%;
  padding: 5px;
  font-size: 12px;
  font-weight: bold;
  background: rgba(48, 48, 48, 0.6);
}
.vjs-nofull .vjs-fullscreen-control {
    display:none;
}

</style>
@endsection
