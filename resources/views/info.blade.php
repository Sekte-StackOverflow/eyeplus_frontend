@extends('master')

@section('heading')
  <link rel="stylesheet" type="text/css" href="{{asset('css/modal.css')}}">

  <h3><b>Daftar</b></h3>
  <div class="input-group">
    <span class="input-group-addon" id="basic-addon1">ID +62</span>
    <input type="text" class="form-control" placeholder="Masukkan nomer ponsel" aria-describedby="basic-addon1">
  </div><br>

  <div class="row">
    <div class="col-sm-8" style="color: #cfc9c8">
      Saya ingin menerima pemberitahuan dari EyePlus tentang promosi dan informasi eksklusif lainnya
    </div>
    <div class="col-sm-4">
      <label class="switch btn pull-right">
        <input type="checkbox" checked>
        <span class="slider round"></span>
      </label>
    </div>
  </div><br>
  <div>
    <a type="button" class="btn btn-block info-button"  href="/eyeplus/auth/register">Berikutnya</a>
  </div><br>    

  <h3><b>Atau daftar menggunakan</b></h3>
  <div class="row" >
    <div class="col-sm-12">
      <div class="inner-addon right-addon">
        <i class="glyphicon glyphicon-envelope"></i>
        <input type="email" class="form-control input" placeholder="Email" />
      </div>
    </div>
    <div class="col-sm-12"><a href="/eyeplus/auth/login" style="color: black">
      <div class="inner-addon right-addon">
        <i class="glyphicon glyphicon-chevron-right"></i>
        <p style="padding: 8px 0px 0px 10px">Sudah punya akun? Masuk</p>
      </a></div>
    </div>
  </div><br>
  <div style="color: #cfc9c8">Dengan mandaftar saya setuju kepada syarat dan ketentuan EyePlus.
    <a data-toggle="modal" data-target="#myModal">Syarat dan ketentuan yang berlaku dan kebijakan privasi</a>
  </div><br><br>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" style="top: 20%;">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <span type="button" class="close" data-dismiss="modal">&times;</span>
        <textarea id="ex3">
          Pak Herman memiliki 8 batang pohon durian. Setiap pohon menghasilkan 45 buah durian. Durian tersebut dijual dengan harga Rp25.000 tiap buahnya. Jika durian itu habis terjual, berapa uang yang diterima pak Herman dari penjualan durian tersebut?

Penyelesaian

Banyak pohon = 8 pohon

Banyak durian tiap pohon = 45

Harga per buah durian = Rp25.000

Sehingga, banyak buah durian 8 pohon = 8 x 45 = 360 dan karena durian terjual semua dengan harga tiap buah Rp25.000 maka

Uang yang diterima Pak Herman adalah 360 x Rp25.000 = Rp9.000.000
        </textarea>
      </div>
      <div class="modal-footer" hidden="div">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  <style type="text/css">
    .input{
      outline: none;
      border-top-style: hidden;
      border-right-style: hidden;
      border-left-style: hidden;
      border-bottom-style: groove;
    }
    .inner-addon { 
      position: relative;
    }
    .inner-addon .glyphicon {
      position: absolute;
      padding: 10px;
      pointer-events: none;
    }
    .right-addon .glyphicon { right: 0px;}
    .right-addon input { padding-right: 30px; }


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

    textarea
    {
    resize: none;
    overflow-y: scroll;
    height:270px;
    width: 100%;
    }
  </style>

@endsection