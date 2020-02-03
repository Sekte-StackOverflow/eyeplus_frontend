@extends('master')
@section('heading')
  <!-- <img src="https://mmc.tirto.id/image/otf/500x0/2018/12/10/shopee-blackpink-_ratio-16x9.jpg" style="width:100%"  alt="Image" class="img-rounded"> -->
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
          <img src="{{ URL::to('/image/16x9.jpg') }}" alt="Image"> 
        </div>
        @for ($i = 0 ; $i <= $total-1; $i++)
        <div class="item" >
          <img src="https://upload.wikimedia.org/wikipedia/id/8/84/SpiderManFarFromHomeTheatrical.jpg" alt="Image">     
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
</div>
@endsection
 

@section('konten')
    <main>
      <section class="cards text-center">
        @for ($i = 0 ; $i <= 9; $i++)
        <article>
          <font class="harga-asli1"><s> Rp 1.500.000 </s><font class="diskon1"><b>40 %</b> OFF </font></font>
          <font class="harga1">RP 1.280.000</font>
          <a href="shopping/barang"><img class="shop-img" src="http://placekitten.com/305/205" alt=" " /></a>
          <button type="button" class="shop-button" data-toggle="modal" data-target="#myModal">BELI</button>
        </article>
        @endfor
      </section>
    </main>

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
@media screen and (max-width: 600px) {
  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
    grid-gap: 10px;
  }
  .carousel-inner img {
      max-height: 200px;
      min-height: 200px;
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
      max-height: 400px;
      min-height: 400px;
      width: 100%;
      padding-left: 20px;
      padding-right: 20px;
    }
  .barang-img{
    height: 400px;
  }
}

.modal-sm{
    top: 10%; width: 450px;
  }

.padding{
  margin: 0px 20px 0px 20px;
}

.harga1{
  position: absolute;
  bottom: 59.2px;
  left: 10px;
  padding: 2px;
  color: white;
  font-weight:bold;
  font-size: 12px;
  background-color: #ff6f00;
}

.harga-asli1{
  position: absolute;
  bottom: 80px;
  left: 10px;
  padding: 0px 0px 0px 2px;
  color: white;
  font-size: 10px;
  background-color:#8a8884;
}

.diskon1{
  color: white;
  font-size: 10px;
  padding: 1.2px 1px 1.6px 1px;
  background-color:#333333;
}
</style>
@endsection

