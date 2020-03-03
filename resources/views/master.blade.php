<!DOCTYPE html>
<html>
<head>
  <title>eyePLUS</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('image/eyeplus.png') }}">
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

<nav class="navbar navbar-inverse navbar-fixed-top " style="background-color:#595959; border: none;">
    <div class="container h-100">
        <div class="d-flex h-100">
            <div class="w-100 text-black">
                <div class="container">

<div class="row" >
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
  <!-- <div class="container-fluid" > -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar" ></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/live" style="padding: 9px 9px 9px 0px; height: 50px;" ><img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$appsetting->logoapp}}" class="logo"></a>
    </div>
    <div class="collapse navbar-collapse " id="myNavbar" >
      <ul class="nav navbar-nav navbar-right"  >
        <li class="{{ Request::is('live') ? 'bg' : '' }} space" ><a href="/live" class="nav-link fa fa-television fa-2x text-center"><br><p class="sansserif" >Live Movie</p> </a></li>
        <li class="{{ Request::is('shopping') ? 'bg' : '' }} space" ><a href="/shopping" class="nav-link fa fa-shopping-cart fa-2x text-center"><br><p class="sansserif">Shopping</p> </a></li>
        <li class="{{ Request::is('sosmed') ? 'bg' : '' }} space" ><a href="/sosmed" class="nav-link fa fa-comment fa-2x text-center"><br><p class="sansserif">Sosial Media</p> </a></li>
        <li class="{{ Request::is('info') ? 'bg' : '' }}" ><a href="/info" class="nav-link fa fa-info-circle fa-2x text-center"><br><p class="sansserif">Info</p> </a></li>
      </ul>

    </div>
  <!-- </div> -->
</div>
<div class="col-sm-1"></div>
</div>

</div></div></div></div>
</nav><br><br><br>

    <header>
    <div class="container h-100">
        <div class="d-flex h-100">
            <div class="w-100 text-black">
                <div class="container">
                  <div class="row" style="">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10" style="background-color: #f8f8f8; padding-top: 15px">

                      <div class="row" >
                        <!-- style="background-color: red " -->
                        <div class="col-sm-9"  >
                          @yield('heading')
                        </div>
                        <!-- <div class="col-sm-1"></div> -->
                        <div class="col-sm-3 " style=" padding-left: 0px; ">  
                          <!-- background-color: blue; -->
    <main>
      <section class="cards1 text-center" >
        <article style="background: transparent;">
          <a href="{{$appsetting->url_qrcode}}" target="_blank" >
          <img class="article-img article-img1 h" src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$appsetting->qrcode}}" />
          </a>
        </article>

        <article style="background: transparent;">
@if($countmini >0)
    <div id="mini" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators" hidden>
        @for ($i = 0 ; $i <= $countmini-1 ; $i++)
          @if($i === 0)
            <li data-target="#mini" data-slide-to="{{$i}}" class="active"></li>
          @else
            <li data-target="#mini" data-slide-to="{{$i}}"></li>
          @endif
        @endfor
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner carousel-inner1 h img-center " role="listbox" >
        <div class="item active" >
          <a href="{{$bannerminifirst->link}}" target="_blank">
            <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$bannerminifirst->web}}" alt="Image" style="margin: 0px;"> 
          </a>
        </div>
        @if($countmini > 1)
          @foreach($bannermininext as $b)
            <div class="item ">
            <a href="{{$b->link}}" target="_blank">
              <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$b->web}}" alt="Image" style="margin: 0px"> 
            </a>
            </div>
          @endforeach
        @endif
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#mini" role="button" data-slide="prev" style="background: transparent;">
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#mini" role="button" data-slide="next" style="background: transparent;">
        <span class="sr-only">Next</span>
      </a>
    </div>
@endif
        </article>

      </section>
    </main>    
                          <!-- <a href="{{$appsetting->url_qrcode}}" target="_blank" >
                            <img class="barcode" src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$appsetting->qrcode}}"><br>
                          </a> -->
                        </div>
                        <!-- <div class="col-sm-3 ">
                          <img class="barcode" src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$appsetting->qrcode}}"><br>
                        </div> -->
                      </div>
                        <hr class="bg-success" style="height: 2px;" > 
                          @yield('banner')
                          @yield('konten')

                          <hr>
                          <div style="
                            background-color: rgb(64,62,63);
                            padding: 10px;
                            margin: -15px;
                            color: white;
                            font-size: 10px;">@2020 <b>eyePLUS. </b> All Rights Reserved.</div>
                    </div>
                  </div>   
                </div>
            </div>
        </div>
    </div>
    </header>
</body>
</html>


<style type="text/css">
@media screen and (max-width: 900px) {
  .cards1 {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(10px, 1fr));
    grid-gap: 0px;
  }
  .carousel-inner1 img {
      max-height: 100px;
      min-height: 100px;
      width: 100%;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 0px;
  }
}
@media screen and (max-width: 767px) {
  .barcode {
    width: 30%
  }
  .space{
  margin-right: 0px
  }
  .cards1{
    padding-top: 10px;
    padding-left: 15px;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-gap: 10px;
  }
  .carousel-inner1 img {
      max-height: 210px;
      /*object-fit: cover;*/
      min-height: 210px;
      width: 100%;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 0px;
  }
  .article-img1 {
  /*object-fit: cover;*/
   border-radius: 0px; background-color: transparent;
  max-height: 210px;
    min-height: 210px;
}  
  .logo{
  height: 33px;
  }
}

@media screen and (max-width: 600px) {
   .carousel-inner1 img {
      max-height: 170px;
      /*object-fit: cover;*/
      min-height: 170px;
      width: 100%;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 0px;
  }
  .article-img1 {
    /*object-fit: cover;*/
    border-radius: 0px; background-color: transparent;
    max-height: 170px;
    min-height: 170px; 
  }
  .cards1 {
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  }
}

@media screen and (max-width: 500px) {
   .carousel-inner1 img {
      max-height: 140px;
      /*object-fit: cover;*/
      min-height: 140px;
      width: 100%;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 0px;
  }
  .article-img1 {
    /*object-fit: cover;*/
    border-radius: 0px; background-color: transparent;
    max-height: 140px;
    min-height: 140px; 
  }
  .cards1 {
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
  }
}
@media screen and (max-width: 400px) {
   .carousel-inner1 img {
      max-height: 110px;
      /*object-fit: cover;*/
      min-height: 110px;
      width: 100%;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 0px;
  }
  .article-img1 {
    /*object-fit: cover;*/
    border-radius: 0px; background-color: transparent;
    max-height: 110px;
    min-height: 110px; 
  }
  .cards1 {
    grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
  }
}
@media screen and (max-width: 350px) {
   .carousel-inner1 img {
      max-height: 90px;
      /*object-fit: cover;*/
      min-height: 90px;
      width: 100%;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 0px;
  }
  .article-img1 {
    /*object-fit: cover;*/
    border-radius: 0px; background-color: transparent;
    max-height: 90px;
    min-height: 90px; 
  }
  .cards1 {
    grid-template-columns: repeat(auto-fill, minmax(90px, 1fr));
  }
}

.bg{
  background-color: rgb(64,62,63);
}

body{
  font-family: 'Montserrat', sans-serif;
}

@media screen and (min-width: 768px) {
.logo{
  height: 42px;
}
  .cards1 {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
    grid-gap: 10px;
  }


.carousel-inner1 img {
    max-height: 192px;
    min-height: 192px;
      padding-left: 0px;
      padding-right: 0px;
      margin-left: 0px;
      width: 250px;
}
.article-img1 {
  /*object-fit: cover;*/
   border-radius: 0px; background-color: transparent;
  max-height: 192px;
    min-height: 192px;
}

.space{
  margin-right: 40px
}
}


</style>
