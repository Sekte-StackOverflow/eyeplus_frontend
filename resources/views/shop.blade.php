@extends('master')
@section('heading')
  <!-- <img src="https://mmc.tirto.id/image/otf/500x0/2018/12/10/shopee-blackpink-_ratio-16x9.jpg" style="width:100%"  alt="Image" class="img-rounded"> -->
<div class="video-responsive">
  <div class="embed-responsive embed-responsive-16by9">

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
          <img src="https://dxclnrbvyw82b.cloudfront.net/images/di/upload/20191016/1f1822eb-1ca4-4502-a57b-333683d38961/88/billbord-page-ec-tv-home-shopping-best-seller.jpg" alt="Image"  style="width:100%"> 
        </div>
        @for ($i = 0 ; $i <= $total-1; $i++)
        <div class="item" >
          <img src="https://dxclnrbvyw82b.cloudfront.net/images/di/upload/20191016/1f1822eb-1ca4-4502-a57b-333683d38961/88/billbord-page-ec-tv-home-shopping-best-seller.jpg" alt="Image"  style="width:100%" >     
        </div>
        @endfor
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control padding" href="#myCarousel" role="button" data-slide="prev" style="background: transparent;>
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control padding" href="#myCarousel" role="button" data-slide="next" style="background: transparent;>
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
  </div>
</div>
@endsection
 

@section('konten')
<!--     <main>
      <section class="cards text-center">
        @foreach($produk as $p)
        <article>
          <form action="shopping/{{ $p->id }}" method="post" name="form" id="form">
          {{ csrf_field() }}
          @if (!Auth::guest())
              <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
          @endif
          <input type="hidden" name="id" value="{{$p->id}}">
          <input type="hidden" name="activity" value="{{$p->nama}}">
          <font class="harga-asli1"><s> @currency($p->price) </s><font class="diskon1"><b>{{ $p->discount }}</b>% OFF </font></font>
          <font class="harga1"> @currency( $p->finalprice)</font>
          <button type="submit" id="submit" class="none"><img class="article-img" src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$p->thumnail}}" alt=" " /></button>
          <button type="button" class="shop-button" data-toggle="modal" data-target="#myModal" hidden>BELI</button>

          </form>
        </article>
        @endforeach

      </section>
    </main> -->

  <div class="scroll" id="ex3">
    <main>
      <section class="cards text-center">
        @foreach($produk as $p)
        <article>
          <form action="shopping/{{ $p->id }}" method="post" name="form" id="form">
          {{ csrf_field() }}
          @if (!Auth::guest())
              <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
          @endif
          <input type="hidden" name="id" value="{{$p->id}}">
          <input type="hidden" name="activity" value="{{$p->nama}}">
          <font class="harga-asli1"><s> @currency($p->price) </s><font class="diskon1"><b>{{ $p->discount }}</b>% OFF </font></font>
          <font class="harga1"> @currency( $p->finalprice)</font>
          <button type="submit" id="submit" class="none"><img class="article-img" src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$p->thumnail}}" alt=" " /></button>
          <button type="button" class="shop-button" data-toggle="modal" data-target="#myModal" hidden>BELI</button>

          </form>
        </article>
        @endforeach

      </section>
    </main>    
  </div> 

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" style=" ">
    <!-- Modal content-->
    <div class="modal-content" style="background-color: transparent;">
      <div class="modal-body" >
        <span type="button" class="close" data-dismiss="modal" style="color: yellow">&times;</span>
        <img class="barang-img" src="{{ asset('image/banner/popup1.png') }}" alt=" "/>
      </div>
      <div class="modal-footer" hidden="div">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<style type="text/css">
@media screen and (max-width: 1000px) {
  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-gap: 10px;
  }
  .carousel-inner img {
      max-height: 240px;
      min-height: 240px;
      width: 70%;
      padding-left: 10px;
      padding-right: 10px;
    }
  .modal-sm{
    margin-top: 5%;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
  }
  .barang-img{
    height: 70px;
  }
}
@media screen and (max-width: 600px) {
  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    grid-gap: 10px;
  }
  .carousel-inner img {
      max-height: 280px;
      min-height: 280px;
      width: 100%;
      padding-left: 20px;
      padding-right: 20px;
    }
  .modal-sm{
    margin-top: 20%;
    max-width: 240px;
    margin-left: auto;
    margin-right: auto;
  }
  .barang-img{
    height: 200px;
  }
}

@media screen and (max-width: 500px) {
  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    grid-gap: 10px;
  }
  .carousel-inner img {
      max-height: 240px;
      min-height: 240px;
      width: 100%;
      padding-left: 20px;
      padding-right: 20px;
    }
  .modal-sm{
    margin-top: 27%;
    max-width: 240px;
    margin-left: auto;
    margin-right: auto;
  }
  .barang-img{
    height: 200px;
  }
}

@media screen and (max-width: 400px) {
  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
    grid-gap: 10px;
  }
  .carousel-inner img {
      max-height: 190px;
      min-height: 190px;
      width: 100%;
      padding-left: 20px;
      padding-right: 20px;
    }
  .modal-sm{
    margin-top: 27%;
    max-width: 240px;
    margin-left: auto;
    margin-right: auto;
  }
  .barang-img{
    height: 200px;
  }


}

@media screen and (min-width: 600px){
.carousel-inner img {
      max-height: 370px;
      min-height: 370px;
      width: 100%;
      padding-left: 10px;
      padding-right: 10px;
    }
  .barang-img{
    height: 400px;
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
  height: 240px; 
  overflow: auto; 
  text-align:justify;
  overflow-x: hidden;
  overflow-y: scroll;
}
.none{
  all: unset;
}

.article-img {
  height: 95px;
  width: 100%;
  border-radius: 7px;
  background-color: white;
  object-fit: fill;
}

.modal-sm{
    top: 10%; width: 450px;
  }

.padding{
  margin: 0px 20px 0px 20px;
}

.harga1{
  position: absolute;
  bottom: 6.96px;
  left: 10px;
  padding: 2px;
  color: white;
  font-weight:bold;
  font-size: 12px;
  background-color: #ff6f00;
}

.harga-asli1{
  position: absolute;
  bottom: 27.7px;
  left: 10px;
  padding: 0px 0px 0px 2px;
  color: white;
  font-size: 10px;
  background-color:#8a8884;
}

.diskon1{
  color: white;
  font-size: 10px;
  padding: 1px 1px 1.6px 1px;
  background-color:#333333;
}
</style>
@endsection

