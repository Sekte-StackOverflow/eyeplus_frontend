@extends('master')

@section('heading')
  <div class="padding">

<!-- <form action="/eyeplus/register" method="post"> -->
  <h3><b>Daftar</b></h3>
  <div class="input-group">
    <span class="input-group-addon">ID +62</span>
    <input type="number" class="form-control" placeholder="Masukkan nomer ponsel" id="phone" onkeyup="s()" maxlength="15" oninput="this.value=this.value.slice(0,this.maxLength)">
  </div><br>

  <div class="row">
    <div class="col-sm-8" style="color: #cfc9c8">
      Saya ingin menerima pemberitahuan dari eyePLUS tentang promosi dan informasi eksklusif lainnya
    </div>
    <div class="col-sm-4">
      <label class="switch btn pull-right">
        <input type="checkbox" checked>
        <span class="slider round"></span>
      </label>
    </div>
  </div><br>
  <div>
    <a href="javascript:document.location.href=link();"><input type="submit" value="Berikutnya" class="btn btn-block info-button" id="berikutnya" disabled></a>
  </div><br>    

  <h3><b>Atau daftar menggunakan</b></h3>
  <div class="row" >
    <div class="col-sm-12">
      <div class="inner-addon right-addon">
        <i class="glyphicon glyphicon-envelope"></i>
        <input class="form-control input" placeholder="Email" id="email" onkeyup="disabledtelp()"/>
      </div>
    </div>

      @if(!Auth::guest() != null)
        <div class="col-sm-12">
          {{ Auth::user()->email }}
          <a href="{{route('logout')}}" style="color: black ; padding: 8px 0px 0px 10px">Logout</a>
          &nbsp;&nbsp;||
          <a data-toggle="modal" data-target="#account" style="color: black ; padding: 8px 0px 0px 10px">Account</a>
        </div>


<div id="account" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" >
    <!-- Modal content-->
    <div class="modal-content" style="background-color: #ebebeb">
      <div class="modal-header">
        <span type="button" class="close" data-dismiss="modal">&times;</span>
      </div>
      <div class="modal-body">
          <div class="row" id="ex3">
            <!-- <div class="col-sm-6">hjgt</div>
            <div class="col-sm-6">hjgt</div> -->
            <table style="margin: 5px" >
              <div class="row account" >
                <div class="col-sm-4 text-center">
                  @if(  !Auth::user()->profile == null)
                  <img class="barcode profil" id="gambar_nodin" style="width: 150px; height: 150px; border-radius: 50%; border: 0.5px solid blue;" src="/profil/{{ Auth::user()->profile}}">
                  @else
                  <img class="barcode profil" id="gambar_nodin" style="width: 150px; height: 150px; border-radius: 50%; border: 0.5px solid blue;" src="{{ URL::to('/image/avatar.png') }}">
                  @endif
                  <b>{{ Auth::user()->email }}</b>
                </div><br>
                <div class="col-sm-8" width="180px">
                  <div style="padding: 10px; border-radius: 5px;border: 1px solid blue">
                  <form action="{{ route('info')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="ini_id" class="form-control" value="{{ Auth::user()->id }}" >
                    <!-- Username  : --> <input type="hidden" name="name" class="form-control " value="{{ Auth::user()->name }}" >
                    Email/Telp  : <input type="" name="" class="form-control" value="{{ Auth::user()->email }}" disabled>
                    Foto : <input type="file" name="file" id="preview_gambar" class="form-control"><br>
                    <button type="submit" class="form-control btn btn-info">Simpan</button>
                  </form>
                  </div>
                  <br>
                  <!-- <a href="{{ route('password.request') }}"> change password</a> -->
                  <div style="padding: 10px; border-radius: 5px;border: 1px solid red">

                    <form method="POST" action="{{ route('change.password') }}">
                  <b>Change Password:</b>
                      @csrf 
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                        @endforeach 
                  <input type="password" id="password" name="current_password" class="form-control input-sm" placeholder="Old Password" minlength="8" style="margin-top:10px" autocomplete="current-password">
                  <input type="password" id="new_password" name="new_password" class="form-control input-sm" placeholder="New Password" minlength="8" style="margin-top: 5px" autocomplete="current-password">
                  <input type="password" id="new_confirm_password" name="new_confirm_password" class="form-control input-sm" placeholder="New Confirm Password" minlength="8" style="margin-top: 5px" autocomplete="current-password">
                  <br>
                  <button type="submit" class="form-control btn btn-danger">Change Password</button><br><br>
                    </form>

                  </div>
                </div>
              </div>
            </table>
          </div>
      </div>
    </div>

  </div>
</div>
        
      @else
      <div class="col-sm-12">
        <a href="login" style="color: black">
        <div class="inner-addon right-addon">
          <i class="glyphicon glyphicon-chevron-right"></i>
          <p style="padding: 8px 0px 0px 10px">Sudah punya akun? Masuk</p>
        
      </div></a>
      </div>
      @endif

<!-- </form> -->

  </div><br>
  <div style="color: #cfc9c8">Dengan mandaftar saya setuju kepada syarat dan ketentuan eyePLUS.
    <a data-toggle="modal" data-target="#myModal">Syarat dan ketentuan yang berlaku dan kebijakan privasi</a>
  </div>

</div>
<div style="height: 60px"></div>


<script type="text/javascript">
function s(){
  var i=document.getElementById("phone");
  if(i.value===""){
    document.getElementById("email").disabled=false;
    document.getElementById("berikutnya").disabled=true;
  }else
    document.getElementById("email").disabled=true;
    document.getElementById("berikutnya").disabled=false;
}
function disabledtelp(){
  var i=document.getElementById("email");
  if(i.value===""){
    document.getElementById("phone").disabled=false;
    document.getElementById("berikutnya").disabled=true;
  }else
    document.getElementById("phone").disabled=true;
    document.getElementById("berikutnya").disabled=false;
}

function link(){
  var i=document.getElementById("email");
  var p = document.getElementById("phone");
  var ket = "/registertelp/" + p.value;
  if(i.value===""){
    return ket;
  }else{
    return "/register";
  }
}

function bacaGambar(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
    
      reader.onload = function (e) {
        $('#gambar_nodin').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
      }
    }
      $("#preview_gambar").change(function(){
      bacaGambar(this);
    });
</script>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" >
    <!-- Modal content-->
    <div class="modal-content" style="background-color: #ebebeb">
      <div class="modal-header">
        <font size="4px"><b>Syarat dan Ketentuan</b></font>
        <span type="button" class="close" data-dismiss="modal">&times;</span>
      </div>
      <div class="modal-body">
        <textarea id="ex3">
          {{$appsetting[0]->sk}}
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

  textarea{
    text-align: justify;
    resize: none;
    overflow-y: scroll;
    height:380px;
    width: 100%;
    background-color: #f5f5f5;
  }

  .modal-sm{
    top: 1%; width: 900px;
    margin-left: auto;
    margin-right: auto;
  }

  @media screen and (max-width: 1000px){
    .modal-sm{
      top: 15%; width: 90%;
      margin-left: auto;
      margin-right: auto;
    }
    textarea{
      height:300px;
      width: 100%;
    }
  }

  
  table, td, th {
      border: 1px solid black;
    } 

  @media screen and (max-width: 600px) {
    .padding{
      padding: 5px 10px 10px 10px;
    }
    .account{
      padding-left: 20px; padding-right: 20px;
    }
  }

  @media screen and (min-width: 768px) {
     .profil{
      margin-top: 130px;
    }
  }

   @media screen and (min-width: 600px) {
    .padding{
      padding: 30px 110px 50px 70px;
    }
    .account{
      padding-left: 50px; padding-right: 50px;
    }
  }
  </style>

@endsection