<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('image/eyeplus.png') }}"">
<title>EyePlus | Login</title>
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

}
</style>
</head>
<body style="background-image: url({{ asset('image/background.jpg') }});">
<img class="barcode profile-img-card" style="width: 80px; border-radius: 50%; margin: 135px auto; margin-left: auto;
  margin-right: auto; display: block; border: 0.5px solid grey; height: 80px; width: 80px" src="https://helpiewp.com/wp-content/uploads/2017/12/user-roles-wordpress-640x640.png">
<div class="login-form">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <img src="{{ asset('image/logo.png') }}" class="logo"><br><br>
    <form action="{{ route('login')}}" method="post" style="background-color: white">
        {{ csrf_field() }}
        <h2 class="text-center" style="padding-top: 10px">Sign in</h2>   
        <div class="form-group">
        <div class="inner-addon right-addon">
            <i class="glyphicon glyphicon-envelope"></i>
            <input type="text" class="form-control input" placeholder="Email / Phone" name="email"  required="required" />
        </div><br>
        <div class="inner-addon right-addon">
            <i class="glyphicon glyphicon-lock"></i>
            <input type="password" class="form-control input" placeholder="Password" name="password" required="required" />
        </div>

        </div>
        <div class="form-group" style="height: 0px">
            <div class="input-group">
                <div class="input-group-addon" style="background-color: transparent; border: none;"></div>    
            </div>
        </div>        
        <div class="form-group" >
            <button type="submit" class="btn btn-primary login-btn btn-block" >Sign in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
        </div>
    </form>
    <p class="text-center small">Don't have an account? <a href="/eyeplus/register" style="color: white">Sign up email!</a> or <a href="/eyeplus/registertelp"></a></p>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</body>
</html>                            