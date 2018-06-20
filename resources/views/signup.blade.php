<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="{{ asset('css/signup.css') }}">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
   
  <div class="formpage">
    <div class="omb_login">
      <h1 class="omb_authTitle"> Sign Up 
      <p>Already have an account? <a href="loginUser">Login</a></p></h1></h1>
   

    <div class="row omb_row-sm-offset-3">
      <div class="col-xs-12 col-sm-6">  
          <form class="omb_loginForm" action="{{route('signup')}}" autocomplete="off" method="post">

           {{ csrf_field() }} 
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="firstName" placeholder="First name" required="">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="lastName" placeholder="Last name" required="">
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="email" class="form-control" name="email" placeholder="email address" required="" >
          </div>
          <span class="help-block"></span>
                    
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
          </div>
          <div id="message">
              <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
          </div>

           <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-map marker"></i></span>
            <input  type="Location" class="form-control" name="location" placeholder="location" required="" >
          </div>
    
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
            <input  type="tel" class="form-control" name="contactno" placeholder="contact no." required="" pattern="^\d{10}$"  oninput="check(this)">
          </div>
          
        

          <button class="btn btn-lg btn-primary btn-block" type="submit">SIGN UP</button>
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
          <div class="col-xs-12 col-lg-2">
            <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
              <i class="fa fa-facebook visible-xs"></i>
              <span class="hidden-xs">SIGNUP WITH FACEBOOK</span>
            </a>
          </div>
      </div> -->
          
          
    </div>
    
    </div>
    
    
    </div>

</body>
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>
<script >
  function check (input) {
    if (input.value.search(new RegExp(input.getAttribute('pattern'))) >= 0) {
        // Input is fine. Reset error message.
        input.setCustomValidity('');
    } else {
        input.setCustomValidity('Provide a vaild 10-digit number');
    }
}
    

</script>
<?php 
      if( isset($msg)) {

        echo "<script type='text/javascript'>alert('$msg')</script>";
      }
      
?>


</html>