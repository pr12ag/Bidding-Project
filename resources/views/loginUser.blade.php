<!DOCTYPE html>
<html>
<head>

 

	<title>login</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="{{ asset('css/loginUser.css') }}">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
<div class="container">
    
<div class="formpage">
  <div class="omb_login">
    <h1 class="omb_authTitle"> Login 
    <p>Do'nt have an Account? <a href="signup">Sign Up</a></p></h1>
    

<div class="row omb_row-sm-offset-3">
  <div class="col-xs-12 col-sm-6">  
    <form class="omb_loginForm" action="loginUser" autocomplete="off" method="post" >
          {{ csrf_field() }} 
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" placeholder="email address" name="email" required="">
          {{$errors->first('email') ? $errors->first('email') : ''}}
      </div>
        <span class="help-block"></span>
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input  type="password" class="form-control" name="password" placeholder="Password" required="" >
          {{$errors->first('password') ? $errors->first('password') : ''}}
          </div>
          <div class="col-md-6 col-sm-3">
        <label class="checkbox">
          <input type="checkbox" value="remember-me">Remember Me
        </label>
      </div>
      <div class="col-md-6 col-sm-3">
        <p class="omb_forgotPwd">
          <a href="#">Forgot password?</a>
        </p>
      </div>
                   <!--  -->

          <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
        </form>
      </div>
      </div>
       <!-- <div class="row omb_row-sm-offset-3 omb_loginOr">
      <div class="col-xs-12 col-sm-6">
        <hr class="omb_hrOr">
        <span class="omb_spanOr">or</span>
      </div>
    </div> -->
     <!-- <div class="row omb_row-sm-offset-3 omb_socialButtons">
          <div class="col-xs-12 col-lg-12">
            <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
              <i class="fa fa-facebook visible-xs"></i>
              <span class="hidden-xs"><a href="{{ route('loginUser') }}">LOG IN WITH FACEBOOK</a></span>
            </a>
          </div>
      </div> -->
    </div>
    </div>

</div>
</body>
<?php 
      if( isset($msg) ) 
        echo "<script type='text/javascript'>alert('$msg')</script>";
?>
      

</html>