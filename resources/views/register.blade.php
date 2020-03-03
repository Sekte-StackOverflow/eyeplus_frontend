<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('image/eyeplus.png') }}"">
<title>eyePLUS | Register Phone</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    function s(){
  var i=document.getElementById("terms");
  if(i.checked){
    document.getElementById("submit").disabled=false;
  }else
    document.getElementById("submit").disabled=true;
}
</script>
<style type="text/css">
    .text-danger{
        font-size: 12px;
        font-weight: bold;
    }
  .login-form {
    margin: 30px auto;
      position: absolute;
  text-align: center;
  top: 3%;
  padding: 10px;
  }
    .login-form form {        
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        border-radius: 10px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .login-btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .input-group-addon .fa {
        font-size: 18px;
        position: relative;
    }
    .login-btn {
        font-size: 15px;
        font-weight: bold;
    } 
    .inner-addon { 
      position: relative;
      font-size: 18px
    }
    .inner-addon .glyphicon {
      position: absolute;
      padding: 10px;
      pointer-events: none;
    }
    .right-addon .glyphicon { right: 0px;}
    .right-addon input { padding-right: 30px; }

    .logo{
      height: auto;
      width: 150px;
    }
    body{
      font-family: 'Montserrat', sans-serif;
    }
}
</style>
</head>
<body style="background-image: url({{ asset('image/background.jpg') }});">
<div class="login-form">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <img src="{{ asset('image/logo.png') }}" class="logo"><br><br>
    <form action="{{ route('registertelp')}}" method="post" style="background-color: white">
        {{ csrf_field() }}
        <h2 class="text-center">Sign Up</h2>   
        <h6 class="text-danger">FOR WATCH ALL MOVIE !</h6>   
        <div class="form-group">

<!--             <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-user"></i>
                <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Full Name" name="name" value="{{ old('name') }}" autofocus maxlength="100" />
                @if($errors->has('name'))
                    <div class="invalid-feedback text-danger">
                        {{ $errors->first('name')}}
                    </div>
                @endif
            </div> -->
            <br>

            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-phone"></i>
                <input type="text" class="form-control  {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Phone" name="email"  value="{{$ket}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="15" minlength="8" />
                @if($errors->has('email'))
                    <div class="invalid-feedback text-danger">
                        The phone has already been taken.
                    </div>
                @endif
            </div><br>

            <input name="News" value="{{$News}}" hidden>
 

            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-lock"></i>
                <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" name="password" />
                @if($errors->has('password'))
                    <div class="invalid-feedback text-danger">
                        {{ $errors->first('password')}}
                    </div>
                @endif
            </div><br>

            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-lock"></i>
                <input type="password" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" placeholder="Password Confirmation" name="password_confirmation" />
                @if($errors->has('password_confirmation'))
                    <div class="invalid-feedback text-danger">
                        {{ $errors->first('password_confirmation')}}
                    </div>
                @endif
            </div><br>

<label class="pull-left checkbox-inline"><input type="checkbox" onclick="s()" id="terms">I agree to the <a href="/modal"> terms.</a></label><br>
        </div>
    <div class="form-group" style="height: 0px; margin: 0px">
            <div class="input-group">
                <div class="input-group-addon" style="background-color: transparent; border: none;"></div>    
            </div>
        </div>     
        <div class="form-group" >
            <button type="submit" class="btn btn-primary login-btn btn-block" id="submit" disabled>Submit</button>
        </div>
    </form>
    <p class="text-center small">i already have an account <a href="/login" style="color: white">Sign in here!</a></p>

    </div>
    <div class="col-sm-4"></div>
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
    top: 7%; width: 900px;
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
  </style>
</body>
</html>                            