@extends('master')

@section('heading')
<div class="video-responsive">
  <div class="embed-responsive embed-responsive-16by9">
  <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{ $poster->poster }}" style="width:100%" class="img-responsive banner">
  </div>
</div>
@endsection

@section('banner')
@if($count >0)
  <div class="row " >
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        @for ($i = 0 ; $i <= $count-1 ; $i++)
          @if($i === 0)
            <li data-target="#myCarousel" data-slide-to="{{$i}}" class="active"></li>
          @else
            <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
          @endif
        @endfor
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner img-center " role="listbox" >
        <div class="item active" >
          <a href="{{$bannerfirst->link}}" target="_blank">
            <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$bannerfirst->web}}" alt="Image" style="border-radius: 7px"> 
          </a>
        </div>
        @if($count > 1)
          @foreach($bannernext as $b)
            <div class="item ">
            <a href="{{$b->link}}" target="_blank">
              <img src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$b->web}}" alt="Image" style="border-radius: 7px"> 
            </a>
            </div>
          @endforeach
        @endif
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
</div><br>
@endif
@endsection

@section('konten')
<div class="scroll" id="ex3" >
<main>
      <section class="cards" >

        @foreach($video as $v)
        <article style="background-color: #f8f8f8">
          @if($v->aksestipe === "All User" )

          <form action="live/{{ $v->id }}" method="post" name="form" id="form">
            {{ csrf_field() }}
            @if (!Auth::guest())
              <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
              <input type="hidden" name="activity" value="{{$v->name}}">
              <input type="hidden" name="id" value="{{$v->id}}">
              <a href="live/{{ $v->id }}" type="submit">
              <button type="submit" id="submit" >
                <img class="article-img " src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$v->thumbnail}}" alt=" " />
                <h4 class="article-title">{{$v->name}}</h4>
                <div class="watching">{{$v->watching_w  + $v->watching_a}} Watching</div>
                <font class="live">{{$v->tipevideo}}</font>
              </button>
              </a>
            @else
            <input type="hidden" name="id" value="{{$v->id}}">
            <button type="submit" id="submit" >
              <a href="live/{{ $v->id }}">
              <img class="article-img " src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$v->thumbnail}}" alt=" " />
              <h4 class="article-title">{{$v->name}}</h4>
              <div class="watching">{{$v->watching_w + $v->watching_a}} Watching</div>
              <font class="live">{{$v->tipevideo}} </font>
              </a>
            </button>
            @endif
          </form>

          @else
          <form action="subscribe/{{ $v->id }}" method="post" name="form" id="form">
            {{ csrf_field() }}
            @if (!Auth::guest())
              <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
              <input type="hidden" name="activity" value="{{$v->name}}">
              <input type="hidden" name="id" value="{{$v->id}}">
              <a href="subscribe/{{ $v->id }}" type="submit">
              <button type="submit" id="submit" >
                <img class="article-img " src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$v->thumbnail}}" alt=" " />
                <h4 class="article-title">{{$v->name}}</h4>
                <div class="watching">{{$v->watching_w  + $v->watching_a}} Watching</div>
                <font class="live">{{$v->tipevideo}}</font>
              </button>
              </a>
            @else
            <input type="hidden" name="id" value="{{$v->id}}">
            <button type="submit" id="submit" >
            <a href="subscribe/{{ $v->id }}">
              <img class="article-img " src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$v->thumbnail}}" alt=" " />
              <h4 class="article-title">{{$v->name}}</h4>
              <div class="watching">{{$v->watching_w  + $v->watching_a}} Watching</div>
              <font class="live">{{$v->tipevideo}} </font>
            </a>
            </button>
            @endif
          </form>
          @endif
        </article>
        @endforeach
  </section>
</main>
</div>

<!-- POP UP -->
<button type="button" class="shop-button" data-toggle="modal" data-target="#myModal" id="popup" hidden>popup</button>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" style=" ">
    <!-- Modal content-->
    <div class="modal-content" style="background-color: transparent;">
      <div class="modal-body" >
        <span type="button" class="close" data-dismiss="modal" style="color: white">&times;</span>
        <a href="{{$popup->link}}" target="_blank"><img class="barang-img" src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$popup->web}}" alt=" "/></a>
      </div>
      <div class="modal-footer" hidden="div">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- <script type="text/javascript">
  function showOverlay() {
  // $('#myModal').show()
  document.getElementById("popup").click();
}
setTimeout(showOverlay, 3000)
</script>
 -->
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
  .modal-sm{
    margin-top: 6%;
    max-width: 500px;
    min-width: 500px;
    margin-left: auto;
    margin-right: auto;
  }
  .barang-img{
    height: auto;
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
  .modal-sm{
    margin-top: 15%;
    max-width: 450px;
    min-width: 450px;
    margin-left: auto;
    margin-right: auto;
  }
  .barang-img{
    height: auto;
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
  .modal-sm{
    margin-top: 20%;
    max-width: 400px;
    min-width: 400px;
    margin-left: auto;
    margin-right: auto;
  }
  .barang-img{
    height: auto;
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
  .modal-sm{
    margin-top: 20%;
    max-width: 300px;
    min-width: 300px;
    margin-left: auto;
    margin-right: auto;
  }
  .barang-img{
    height: auto;
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
  .modal-sm{
    margin-top: 5%;
    max-width: 630px;
    min-width: 630px;
    margin-left: auto;
    margin-right: auto;
  }
  .barang-img{
    height: auto;
  }
}

#ex3::-webkit-scrollbar{
width:11px;
background-color:#f8f8f8;
} 
#ex3::-webkit-scrollbar-thumb{
background-color:#ebebeb;
border-radius:10px;
}
#ex3::-webkit-scrollbar-thumb:hover{
background-color:#f2f0f0;
border:2px solid #c4c2c2;
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
  background-color: #f8f8f8;
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
    .banner{
    height: 100%;
    width: 100%;
    display: block;
    margin: 0 auto;
    position: absolute;
    }
</style>
@endsection
