@extends('master')

@section('heading')
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hAiI3lRP0HM" allowfullscreen></iframe>
  </div>

@endsection

@section('konten')
<main>
    <section class="barang-cards">
        <article>
          <img class="barang-img" src="http://placekitten.com/305/205" alt=" " />
          <font class="harga-asli"><s> Rp 1.500.000 </s><font class="diskon">40 %</font></font>
          <font class="harga">RP 1.280.000</font>
        </article>
        <article style="background-color: white">
          <img class="mini-img" src="http://placekitten.com/305/205">
            <div style="margin: 5px"><b>Judul</b></div>
          	<div class="barang-ket" id="ex3">
          		<hr class="barang-hr">
          		@for ($i = 0 ; $i <= 12 ; $i++)
	          		<div class="row">
      					  <div class="column">
      					    Capacity
      					  </div>
      					  <div class="column2">
      					    : 600ml
      					  </div>
					     </div>
					     <hr class="barang-hr">
				      @endfor
        	</div> 
        </article>
        <article>
          <img class="barang-img" src="http://2.bp.blogspot.com/-SyRADliKjSg/Vkl6ONOZ-SI/AAAAAAAAA5k/2KTUTs8nZ_I/s1600/diskon-10.jpg" alt=" " />
        </article>
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
</style>
