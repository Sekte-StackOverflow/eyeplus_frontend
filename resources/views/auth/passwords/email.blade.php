

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('image/eyeplus.png') }}"">
<title>eyePLUS | Forgot Password</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
  .login-form {
    margin: 30px auto;
      position: absolute;
  text-align: center;
  top: 10%;
  padding: 10px;
  }
    .login-form form {        
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        border-radius: 10px;
    }
    .login-form h4 {
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
    <div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif 
    <form method="POST" action="{{ route('password.email') }}" style="background-color: white">
        @csrf
        <h4 class="text-center">You forgot your password? Here you can easily retrieve a new password.</h4>  
        <div class="form-group">
            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-envelope"></i>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <h6>{{ $message }}</h6>
                                    </span>
                                @enderror
            </div>
        </div>
        <div class="form-group" style="height: 0px; margin: 0px">
            <div class="input-group">
                <div class="input-group-addon" style="background-color: transparent; border: none;"></div>    
            </div>
        </div>        
        <div class="form-group" >
            <button type="submit" class="btn btn-primary login-btn btn-block" >{{ __('Request New Password') }}</button>
        </div>
        <div class="clearfix">
            <a href="/login" class="pull-left">Login</a><br>
            <a href="/register" class="pull-left">Register</a>
        </div>
    </form>
    </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</body>
</html>                            