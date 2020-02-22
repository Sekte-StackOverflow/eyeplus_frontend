<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('image/eyeplus.png') }}"">
<title>eyePLUS | Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
  .login-form {
    margin: 0px auto;
      position: absolute;
  text-align: center;
  top: 60px;
  z-index: -1;
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
        padding-bottom: 30px;
    }
    body{
        font-family: 'Montserrat', sans-serif;
    }

}
</style>
</head>
<body style="background-image: url({{ asset('image/background.jpg') }});">
<img class="barcode profile-img-card" style="width: 80px; border-radius: 50%; margin: 135px auto; margin-left: auto;
  margin-right: auto; display: block; border: 0.5px solid grey; height: 80px; width: 80px" src="{{ URL::to('/image/avatar.png') }}">
<div class="login-form">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <img src="{{ asset('image/logo.png') }}" class="logo"><br><br>
    <form method="POST" action="{{ route('login') }}" style="background-color: white">
        @csrf
        <h2 class="text-center" style="padding-top: 10px">{{ __('Sign In') }}</h2>  
        <h6 class="text-danger">FOR WATCH ALL MOVIE !</h6>    
        <div class="form-group">
        <div class="inner-addon right-addon">
            <i class="glyphicon glyphicon-envelope"></i>
           <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email/Telepon" autofocus>

                                <!-- @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <h6>{{ $message }}</h6>
                                    </span>
                                @enderror -->
        </div><br>
        <div class="inner-addon right-addon">
            <i class="glyphicon glyphicon-lock"></i>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <h6>{{ $message }}</h6>
                                    </span>
                                @enderror
        </div>

        </div>
        <div class="form-group" style="height: 0px">
            <div class="input-group">
                <div class="input-group-addon" style="background-color: transparent; border: none;"></div>    
            </div>
        </div>        
        <div class="form-group" >
            <button type="submit" class="btn btn-primary login-btn btn-block">
                {{ __('Sign In') }}
            </button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
            </label>
                                @if (Route::has('password.request'))
                                    <a class="pull-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
        </div>
    </form>
    <p class="text-center small">Don't have an account? <a href="/register" style="color: white">Sign up email</a> or <a href="/registertelp" style="color: white">Telepon!</a></p></a></p>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</body>
</html>                            