
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
          <img src="{{ URL::to('/image/16x9.jpg') }}" alt="Image" class="banner padding-img"> 
        </div>
        @for ($i = 0 ; $i <= $total-1; $i++)
        <div class="item" >
          <img src="https://upload.wikimedia.org/wikipedia/id/8/84/SpiderManFarFromHomeTheatrical.jpg" alt="Image" class="banner padding-img">     
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
          <a href="shopping/barang"><img class="shop-img" src="http://placekitten.com/305/205" alt=" " /></a>
          <button type="button" class="shop-button" data-toggle="modal" data-target="#myModal">BELI</button>
        </article>
        @endfor
      </section>
    </main>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <img class="barang-img" src="http://2.bp.blogspot.com/-SyRADliKjSg/Vkl6ONOZ-SI/AAAAAAAAA5k/2KTUTs8nZ_I/s1600/diskon-10.jpg" alt=" " style="height: auto" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


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

