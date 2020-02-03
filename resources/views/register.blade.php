<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('image/eyeplus.png') }}"">
<title>EyePlus | Register</title>
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
  top: 15%;
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

}
</style>
</head>
<body style="background-color: #d6d6d6;">
<div class="login-form">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <form action="{{ route('register')}}" method="post">
        {{ csrf_field() }}
        <h2 class="text-center">Register</h2>   
        <div class="form-group">

            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-user"></i>
                <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Full Name" name="name" value="{{ old('name') }}" autofocus />
                @if($errors->has('name'))
                    <div class="invalid-feedback text-danger">
                        {{ $errors->first('name')}}
                    </div>
                @endif
            </div><br>

            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-envelope"></i>
                <input type="text" class="form-control  {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email / Phone" name="email"  value="{{ old('email') }}"/>
                @if($errors->has('email'))
                    <div class="invalid-feedback text-danger">
                        {{ $errors->first('email')}}
                    </div>
                @endif
            </div><br>

            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-lock"></i>
                <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"" placeholder="Password" name="password" />
                @if($errors->has('password'))
                    <div class="invalid-feedback text-danger">
                        {{ $errors->first('password')}}
                    </div>
                @endif
            </div><br>

            <div class="inner-addon right-addon">
                <i class="glyphicon glyphicon-lock"></i>
                <input type="password" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}"" placeholder="Password" name="password_confirmation" />
                @if($errors->has('password_confirmation'))
                    <div class="invalid-feedback text-danger">
                        {{ $errors->first('password_confirmation')}}
                    </div>
                @endif
            </div>


        </div>
    <div class="form-group" style="height: 0px; margin: 0px">
            <div class="input-group">
                <div class="input-group-addon" style="background-color: transparent; border: none;"></div>    
            </div>
        </div>      
        <div class="form-group" >
            <button type="submit" class="btn btn-primary login-btn btn-block" >Register</button>
        </div>
    </form>
    <p class="text-center small">i already have an account <a href="/eyeplus/auth/login">Sign in here!</a></p>

    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</body>
</html>                            