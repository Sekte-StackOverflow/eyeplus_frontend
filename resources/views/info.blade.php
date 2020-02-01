@extends('master')

@section('heading')
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
    <button type="button" class="btn btn-block info-button">Berikutnya</button>
  </div><br>

  <h3><b>Atau daftar menggunakan</b></h3>
  <div class="row" >
    <div class="col-sm-12">
      <div class="inner-addon right-addon">
        <i class="glyphicon glyphicon-envelope"></i>
        <input type="email" class="form-control input" placeholder="Email" />
      </div>
    </div>
    <div class="col-sm-12">
      <div class="inner-addon right-addon">
        <i class="glyphicon glyphicon-chevron-right"></i>
        <p style="padding: 8px 0px 0px 10px">Sudah punya akun? Masuk</p>
      </div>
    </div>
  </div><br>
  <div style="color: #cfc9c8">Dengan mandaftar saya setuju kepada syarat dan ketentuan EyePlus.
    <a href="">Syarat dan ketentuan yang berlaku dan kebijakan privasi</a>
  </div><br><br>

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
  </style>

@endsection

@section('konten')

@endsection