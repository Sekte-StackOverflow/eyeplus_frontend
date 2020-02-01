@extends('master')

@section('heading')
<div class="video-responsive">
  <div class="embed-responsive embed-responsive-16by9">
    <video id="videojs-hls-quality-selector-player" class="video-js vjs-default-skin embed-responsive-item " poster="http://vjs.zencdn.net/v/oceans.png" 
    style="position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit:fill;
    border:0" controls autoplay loop playsinline >

<source type="application/x-mpegURL" src="https://stream.suryaiptv.net/streams/22_.m3u8">
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
          <img src="{{ URL::to('/image/16x9.jpg') }}" alt="Image" class=" padding-img"> 
        </div>
        @for ($i = 0 ; $i <= $total-1; $i++)
        <div class="item" >
          <img src="https://upload.wikimedia.org/wikipedia/id/8/84/SpiderManFarFromHomeTheatrical.jpg" alt="Image" class=" padding-img">     
        </div>
        @endfor
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
        @for ($i = 0 ; $i <= 8; $i++)
        <article>
          <!-- <a href="/live/streaming/{{$i}}"> -->
            <img class="article-img" src="https://assets-a1.kompasiana.com/items/album/2019/09/02/metro-tv-indonesia-logo-5d6d1a690d823061a66bf102.jpg" alt=" " />
            <h4 class="article-title">
              Metro
            </h4>
            <div class="watching">100 menonton</div>
            <font class="live">Live</font>
          <!-- </a> -->
        </article>
        @endfor
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
  border-radius: 10%;
}

.padding-img{
  border-radius: 10%;
}
</style>
@endsection
