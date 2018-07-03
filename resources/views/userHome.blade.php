<!DOCTYPE html>
<html>
<head>
	<title>UserHome</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/userHome.css') }}">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    <div class="container-fluid">
    <div class="row header" >
    <div class="col-md-2 logo">
      <a href="userHome"><img src="../img/logofinals.png"></a>
    </div>
    <div class="col-md-9 list">
      <ul>
          <li><a href="userHome">Home</a></li>
          <li><a href="postjob">Post a Job </a></li>
          <li><a href="searchjobs">Search Jobs</a></li>
          <li><a href="viewjob">View Jobs</a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php 
                         $name = session()->get('name');
                        echo $name;
                        ?>
              <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="profile">Profile</a> </li> 
                <li><a href="editprofile">Edit Profile</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="work">How It Works</a></li>
                <li class="divider">drop down menu logout is here</li>
                <li><a href="logout">LOGOUT</a></li>
              </ul>
            </li>
      </ul>
    </div>
    <div class="col-md-1 "></div>
  </div>
</div>
</header>
<div class="container">
  <div class="row">
    <div class="col-md-12 home-img">
      <img src="../img/coverbook.jpeg">
    </div>
  </div>
</div>
</body>
<?php 
      if( isset($msg)) 
        echo "<script type='text/javascript'>alert('$msg')</script>";
      
?>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</html>

