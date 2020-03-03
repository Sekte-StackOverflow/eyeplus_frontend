@extends('master')

@section('heading')
<!--   @foreach($produk as $p)
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $p->youtube}}" allowfullscreen></iframe>
    </div>
  @endforeach -->
  <div class="video-responsive">
  <div class="embed-responsive embed-responsive-16by9">
    @foreach($produk as $p)
    <video id="videojs-hls-quality-selector-player" class="video-js vjs-default-skin embed-responsive-item vjs-nofull" poster="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $p->thumnail }}" 
    style="position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit:fill;
    border:0" controls autoplay loop playsinline >

  <source type="video/mp4" src="{{ $p->youtube }}">
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

@section('konten')
<main>
    <section class="barang-cards">
      @foreach($produk as $p)
        <article>
          <img class="barang-img" src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $p->thumnail }}" alt=" " />
          <font class="harga-asli1"><s> @currency($p->price) </s><font class="diskon1">{{ $p->discount }} %</font></font>
          <font class="harga1">@currency($p->finalprice)</font>
        </article>
        <article style="background-color: #f8f8f8">
          <img class="mini-img" src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$p->detailgambar}}">
            <div style="margin: 5px"><b>{{$p->nama}}</b></div>
          	<div class="barang-ket" id="ex31" >
          		<hr class="barang-hr" style="margin-left: -10px">
              @foreach($template as $t)
                <div class="row">
                  <div class="column">
                    {{$t->deskripsi}}
                  </div>
                  <div class="column2" style="padding-right: 20px;">
                    : {{$t->value}}
                  </div>
               </div>
               <hr class="barang-hr" style="margin-left: -10px">
              @endforeach
        	</div> 
        </article>
        <article>
          <img class="barang-img" src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $p->banner }}" alt=" " />
        </article>
      @endforeach
    </section>
</main><br>
@endsection

<style type="text/css">
  .mini-img {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  margin-left: 5px;
}

.barang-ket{
  margin:5px; 
  padding:5px; 
  width: auto; 
  height: 210px; 
  overflow: auto; 
  text-align:justify;
  overflow-x: hidden;
  overflow-y: scroll;
}

#ex31::-webkit-scrollbar{
width:11px;
background-color:#f8f8f8;
} 
#ex31::-webkit-scrollbar-thumb{
background-color:#ebebeb;
border-radius:10px;
}
#ex31::-webkit-scrollbar-thumb:hover{
background-color:#f2f0f0;
border:2px solid #c4c2c2;
}
#ex31::-webkit-scrollbar-thumb:active{
background-color: #636363;
border:1px solid #333333;
} 

.harga1 {
  position: absolute;
  bottom: 36px;
  left: 150px;
  padding: 2px;
  color: white;
  font-weight:bold;
  font-size: 14px;
  background-color: #ff6f00;
}

.harga-asli1{
  position: absolute;
  bottom: 60px;
  left: 150px;
  padding: 0px 0px 0px 5px;
  color: white;
  font-weight:bold;
  font-size: 11px;
  background-color:#8a8884;
}

.diskon1{
  padding: 2px;
  color: white;
  font-weight:bold;
  font-size: 12px;
  padding: 1px 3px 1px 3px;
  background-color:#333333;
}

.vjs-poster{
background-size: 100%!important;
}
.vjs-nofull .vjs-fullscreen-control {
    display:none;
}
</style>
