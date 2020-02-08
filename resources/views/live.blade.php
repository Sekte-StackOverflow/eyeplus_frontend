@extends('master')

@section('heading')
<div class="video-responsive">
  <div class="embed-responsive embed-responsive-16by9">
  <img src="{{ asset('image/banner/images.jpg' ) }}" class="img-responsive">
  </div>
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

        @foreach($video as $v)
        <article>

          <a href="live/{{ $v->id }}">
            <img class="article-img" src="https://alvaindopratama.com/admin-eyeplus/media/img/{{$v->thumbnail}}" alt=" " />
            <h4 class="article-title">{{$v->name}}</h4>
            <div class="watching">1000 menonton</div>
            <font class="live">
              @if($v->tipevideo == "Live Streaming")
                LIVE
              @else
                VOD
              @endif
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
</style>
@endsection
