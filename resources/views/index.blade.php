<!DOCTYPE html>
<html>
<head>

	<title>Home Page</title>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
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
    <div class="col-md-10 list">
      <ul>
          
          <li><a href="about">About Us</a></li>
          <li><a href="work">How It Works</a></li>
          <li><a href="loginUser" class="btn btn-default btn-color">LOGIN</a></li>
          <li><a href="signup" class="btn btn-default btn-color">SIGN UP</a></li>


      </ul>
    </div>
     
  </div>
 
</div>
</header>
<div class="bg-img">
  <!-- <div class="container">
    <div class="row">
      <div class="col-md-3 def">
        <div class="abc">
       <i class="fa fa-search"></i>
       <input type="field" class="loct" name="location" placeholder="Location">
        </div>      
      </div>
      <div class="col-md-3 def">
        <div class="abc">
          <i class="fa fa-search"></i>
          <input type="field" class="loct" name="skills" placeholder="Skills">
        </div>   
      </div>
      <div class="col-md-3 def">
        <div class="abc">
          <i class="fa fa-search"></i>
       <select>
            
            <option value="" class="loct">Category</option>
            <option value="Ghaziabd" class="common">Design</option>
            <option value="Delhi" class="common">Buisness Support</option>
            <option value="Jaipur" class="common">Writing & Translation</option>
            <option value="Ahmedabad" class="common">Software Development</option>
            <option value="Lucknow" class="common">Web Designer</option>
            <option value="Lucknow" class="common">Marketing</option>
        </select> 
        </div>   
      </div>
      <div class="col-md-2 def">
        <div class="abc">
       <span><center><button class="xyz">SEARCH JOBS</button></center></span>
        </a></center>
        </div>
      </div>
    </div>
</div>
</div> -->

</div>
<div class="container"> <!-- jobs  -->
  <div class="row">
    <div class="col-md-12 projecthead">
      <h2>JOBS</h2>
    </div>
    <div class="col-md-4">
    <div class="category-head">
    <center><img src="../img/book.jpg" >
    <h3>Web Design</h3></center>
    </div>
    </div>
    <div class="col-md-4">
    <div class="category-head">
    <center><img src="../img/book.jpg">
    <h3>Software Development</h3></center>
    </div>
    </div>
    <div class="col-md-4">
    <div class="category-head">
    <center><img src="../img/book.jpg">
    <h3>Buisness Support</h3></center>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    <div class="category-head">
    <center><img src="../img/book.jpg">
    <h3>Writing & Translation</h3></center>
    </div>
    </div>
    <div class="col-md-4">
    <div class="category-head">
    <center><img src="../img/book.jpg">
    <h3>Web Designer</h3></center>
    </div>
    </div>
    <div class="col-md-4">
    <div class="category-head">
    <center><img src="../img/book.jpg">
    <h3>Marketing</h3></center>
    </div>
    </div>
    </div>
</div> 
</div><!--  end of jobs -->
<footer> <!-- footer code -->
  <div class="container-fluid footer-padding">
    <div class="footer-background">
        <div class="col-md-3"></div>
        <div class="col-md-6 footer-data">
          <div class="footer-logo">
            <img src="../img/logofinals.png">
          </div>
          <div class="footer-content">
            <p><span class="footer-prowo"> PROWO </span>gives your business access to thousands of trusted</p>
            <p>freelancers who can work flexibly from anywhere.</p>
            <p>©2018 PROWO LTD.</p>
            <p> Terms  Privacy</p>
          </div>
          
        </div>
        <div class="col-md-3"></div>
    </div>
  </div>
</footer> <!-- end of footer code -->
</body>
<?php
   
      if( isset($msg)) 
        echo "<script type='text/javascript'>alert('$msg')</script>";
 ?>
</html>