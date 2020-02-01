<!DOCTYPE html>
<html>
<head>
  <title>EyePlus</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('image/eyeplus.png') }}"">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/sass.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/live.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/shopping.css')}}">

  <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/style.css') }}">
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="http://vjs.zencdn.net/7.0/video-js.min.css" rel="stylesheet">
  <script src="http://vjs.zencdn.net/7.0/video.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('videojs/vjs/node_modules/video.js/dist/video-js.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('videojs/vjs/dist/videojs-hls-quality-selector.css')}}">

</head>
<body style="background-color: #d6d6d6;  ">

<nav class="navbar navbar-inverse navbar-fixed-top ">
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
  <div class="container-fluid" >
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/eyeplus/live"><img src="{{ URL::to('/image/logo.png') }}" style="height: 150%; margin-left: 50%"></a>
    </div>
    <div class="collapse navbar-collapse " id="myNavbar" >
      <ul class="nav navbar-nav navbar-right" >
        <li class="{{ Request::is('live') ? 'active' : '' }}" style="margin-right: 60px;"><a href="/eyeplus/live" class="nav-link fa fa-television fa-2x text-center"><br><p class="sansserif">Live Movie</p> </a></li>
        <li class="{{ Request::is('shopping') ? 'active' : '' }}" style="margin-right: 60px"><a href="/eyeplus/shopping" class="nav-link fa fa-shopping-cart fa-2x text-center"><br><p class="sansserif">Shopping</p> </a></li>
        <li class="{{ Request::is('sosmed') ? 'active' : '' }}" style="margin-right: 60px"><a href="/eyeplus/sosmed" class="nav-link fa fa-comment fa-2x text-center"><br><p class="sansserif">Sosial Media</p> </a></li>
        <li class="{{ Request::is('info') ? 'active' : '' }}" style="margin-right: 60px"><a href="/eyeplus/info" class="nav-link fa fa-info-circle fa-2x text-center"><br><p class="sansserif">Info</p> </a></li>
      </ul>

    </div>
  </div>
</div>
<div class="col-sm-1"></div>
</div>
</nav><br><br><br>

    <header>
    <div class="container h-100">
        <div class="d-flex h-100">
            <div class="w-100 text-black">
                <div class="container">
                  <div class="row" style="">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10" style="background-color: white; padding-top: 15px">

                      <div class="row">
                        <div class="col-sm-9" >
                          @yield('heading')
                        </div>
                        <!-- <div class="col-sm-1"></div> -->
                        <div class="col-sm-3 ">
                          <div class="gratis">GRATIS!</div>
                          <div class="keterangan"> Download aplikasi <b>eyePlus</b> di gadget Android anda</div>
                          <img class="barcode" src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/11/8/39617213/39617213_91fd0f0c-03c2-43b4-861a-64e9f04e8f24_700_700.jpeg"><br>
                        </div>
                      </div>
                        <hr class="bg-success" style="height: 2px;" > 
                          @yield('banner')
                          @yield('konten')

                          <hr>
                          <div style="
                            background-color: #080807;
                            padding: 10px;
                            margin: -15px;
                            color: white;
                            font-size: 10px;">@2020 by <b>EyePlus</b> All Rights Reserved</div>
                    </div>
                  </div>      
                  <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
    </div>
    </header>
</body>
</html>


<style type="text/css">
@media screen and (max-width: 601px) {
  .barcode {
    width: 30%
  }
}


</style>
