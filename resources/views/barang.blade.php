@extends('master')

@section('heading')
  @foreach($produk as $p)
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $p->youtube}}" allowfullscreen></iframe>
    </div>
  @endforeach
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
        <article style="background-color: white">
          <img class="mini-img" src="https://eyeplus.co.id/admin-eyeplus/media/img/{{$p->detailgambar}}">
            <div style="margin: 5px"><b>{{$p->nama}}</b></div>
          	<div class="barang-ket" id="ex3">
          		<hr class="barang-hr">
              @foreach($template as $t)
                <div class="row">
                  <div class="column">
                    {{$t->deskripsi}}
                  </div>
                  <div class="column2">
                    : {{$t->value}}
                  </div>
               </div>
               <hr class="barang-hr">
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
</style>
