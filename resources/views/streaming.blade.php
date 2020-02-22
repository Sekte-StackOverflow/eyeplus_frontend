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

@foreach($stream as $s)
  <source type="application/x-mpegURL" src="{{ $s->link }}">
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
      player.ready(function() {
       player.tech_.off('dblclick');
      });
    }(window, window.videojs));

  </script>

</div>
@endsection

@section('banner')
  <div class="row " >
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        @for ($i = 0 ; $i <= $total ; $i++)
        <li data-target="#myCarousel" data-slide-to="$i"></li>
        @endfor
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner img-center " role="listbox" >
        <div class="item active" >
          <img src="{{ asset('image/banner/1.jpg') }}" alt="Image" style="border-radius: 7px"> 
        </div>
        <div class="item ">
          <img src="{{ asset('image/banner/2.jpg') }}" alt="Image" style="border-radius: 7px"> 
        </div>
        <div class="item ">
          <img src="{{ asset('image/banner/3.jpg') }}" alt="Image" style="border-radius: 7px"> 
        </div>

        <!-- @for ($i = 0 ; $i <= $total-1; $i++)
        <div class="item" >
          <img src="{{ asset('image/baner/4.jpg') }}" alt="Image">     
        </div>
        @endfor -->
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control padding" href="#myCarousel" role="button" data-slide="prev" style="background: transparent;">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control padding" href="#myCarousel" role="button" data-slide="next" style="background: transparent;">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div><br><br>
@endsection


@section('konten')
<div class="scroll" id="ex3">
  <main>
      <section class="cards">

        @foreach($video as $v)
        <article style="background-color: white">
          @if($v->aksestipe === "All User" )

          <form action="../live/{{ $v->id }}" method="post" name="form" id="form">
            {{ csrf_field() }}
            @if (!Auth::guest())
              <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
              <input type="hidden" name="activity" value="{{$v->name}}">
              <input type="hidden" name="id" value="{{$v->id}}">
              <!-- <a href="live/{{ $v->id }}" type="submit"> -->
              <button type="submit" id="submit" >
                <img class="article-img " src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$v->thumbnail}}" alt=" " />
                <h4 class="article-title">{{$v->name}}</h4>
                <div class="watching">{{$v->watching_w}} Watching</div>
                <font class="live">{{$v->tipevideo}}</font>
              </button>
              <!-- </a> -->
            @else
            <input type="hidden" name="id" value="{{$v->id}}">
            <button type="submit" id="submit" >
              <!-- <a href="live/{{ $v->id }}"> -->
              <img class="article-img " src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$v->thumbnail}}" alt=" " />
              <h4 class="article-title">{{$v->name}}</h4>
              <div class="watching">{{$v->watching_w}} Watching</div>
              <font class="live">{{$v->tipevideo}} </font>
            <!-- </a> -->
            </button>
            @endif
          </form>

          @else
          <form action="../subscribe/{{ $v->id }}" method="post" name="form" id="form">
            {{ csrf_field() }}
            @if (!Auth::guest())
              <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
              <input type="hidden" name="activity" value="{{$v->name}}">
              <input type="hidden" name="id" value="{{$v->id}}">
              <!-- <a href="live/{{ $v->id }}" type="submit"> -->
              <button type="submit" id="submit" >
                <img class="article-img " src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$v->thumbnail}}" alt=" " />
                <h4 class="article-title">{{$v->name}}</h4>
                <div class="watching">{{$v->watching_w}} Watching</div>
                <font class="live">{{$v->tipevideo}}</font>
              </button>
              <!-- </a> -->
            @else
            <input type="hidden" name="id" value="{{$v->id}}">
            <button type="submit" id="submit" >
              <!-- <a href="subscribe/{{ $v->id }}"> -->
              <img class="article-img " src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$v->thumbnail}}" alt=" " />
              <h4 class="article-title">{{$v->name}}</h4>
              <div class="watching">{{$v->watching_w}} Watching</div>
              <font class="live">{{$v->tipevideo}} </font>
            <!-- </a> -->
            </button>
            @endif
          </form>
          @endif
        </article>
        @endforeach
      </section>
    </main>
</div>

<style type="text/css">
@media screen and (max-width: 1000px) {
.cards {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
  grid-gap: 10px;
}

.carousel-inner img {
      max-height: 100px;
      /*object-fit: cover;*/
      min-height: 100px;
      width: 95%;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 15px;
      margin-right: 15px;
    }
}

@media screen and (max-width: 650px) {
.cards {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 10px;
}

.carousel-inner img {
      max-height: 100px;
      /*object-fit: cover;*/
      min-height: 100px;
      width: 94%;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 15px;
      margin-right: 15px;
    }
}

@media screen and (max-width: 500px) {
.cards {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
  grid-gap: 10px;
}

.carousel-inner img {
      max-height: 90px;
      /*object-fit: cover;*/
      min-height: 90px;
      width: 100%;
      width: 93%;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 15px;
      margin-right: 15px;
    }
}

@media screen and (max-width: 400px) {
.cards {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
  grid-gap: 10px;
}

.carousel-inner img {
      max-height: 80px;
      /*object-fit: cover;*/
      min-height: 80px;
      width: 91%;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 15px;
      margin-right: 15px;
    }
}

@media screen and (min-width: 1000px) {
.carousel-inner img {
      max-height: 200px;
      /*object-fit: cover;*/
      min-height: 200px;
      width: 97%;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 15px;
      margin-right: 15px;
    }
  }

#ex3::-webkit-scrollbar{
width:11px;
background-color:white;
} 
#ex3::-webkit-scrollbar-thumb{
background-color:#ebebeb;
border-radius:10px;
}
#ex3::-webkit-scrollbar-thumb:hover{
background-color:#c4c2c2;
border:2px solid #8c8b8b;
}
#ex3::-webkit-scrollbar-thumb:active{
background-color: #636363;
border:1px solid #333333;
} 

.scroll{
  margin:5px; 
  padding:5px; 
  width: auto; 
  height: 250px; 
  overflow: auto; 
  text-align:justify;
  overflow-x: hidden;
  overflow-y: scroll;
}

button {
  all: unset;
}

.article-img {
  height: 95px;
  width: 100%;
  border-radius: 7px;
  background-color: white;
}
.padding{
  margin: 0px 20px 0px 20px;
}
.article-title {
  position: absolute;
  top: 62.5px;
  right: 0px;
  color: white;
  width: 100%;
  padding: 5px;
  font-size: 12px;
  background: rgba(48, 48, 48, 0.6);
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

.watching{
  color: #5e6269;
  font-size: 10px;
  text-align: left;
  padding: 5px 5px 5px 0px; 
  background-color: white;
}

.live {
  position: absolute;
  top: 0px;
  left: 0px;
  padding: 4.5px 5px 2px 5px;
  color: white;
  height: 21px;
  font-weight:bold;
  font-size: 10px;
  border-radius: 5px 0px 5px 0px;
  background-color: #ff6f00;
}
.vjs-nofull .vjs-fullscreen-control {
    display:none;
}

</style>
@endsection
