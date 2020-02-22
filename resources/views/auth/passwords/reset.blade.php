
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('image/eyeplus.png') }}"">
<title>EyePlus | Reset Password</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    .text-danger{
        font-size: 12px;
        font-weight: bold;
    }
  .login-form {
    margin: 30px auto;
      position: absolute;
  text-align: center;
  top: 5%;
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
    <form method="POST" action="{{ route('password.update') }}" style="background-color: white">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <h2 class="text-center">{{ __('Reset Password') }}</h2>   
        <div class="form-group">

            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-envelope"></i>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <h6>{{ $message }}</h6>
                                    </span>
                                @enderror
            </div><br>

            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-lock"></i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password" autofocus>

                                @error('password')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <h6>{{ $message }}</h6>
                                    </span>
                                @enderror
            </div><br>

            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-lock"></i>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
            </div>


        </div>
    <div class="form-group" style="height: 0px; margin: 0px">
            <div class="input-group">
                <div class="input-group-addon" style="background-color: transparent; border: none;"></div>    
            </div>
        </div>      
        <div class="form-group" >
            <button type="submit" class="btn btn-primary login-btn btn-block">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>

    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</body>
</html>                            

