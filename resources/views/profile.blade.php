<!DOCTYPE html>
<html lang="en">
<head>
  <title>user-profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css\profile.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container-fluid tophead " id="myHeader"><!--header-->
  <div class="row" >
    <div class="col-md-2 logo">
       <a href="userHome"><img src="../img/logofinals.png"></a>
    </div>
    <div class="col-md-10 list">
      <ul>
          <li><a href="userHome">Home</a></li>
          <li><a href="postjob">Post a Job </a></li>
          <li><a href="searchjobs">Search Jobs</a></li>
          <li><a href="viewjob">View Jobs</a></li>
          <li><a href="logout">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</div><!--end of header --> 
<br>
<br>
<br>
<br>
<br>


<div class="container"><!--content-->
  <div class="row">
    <div class="col-md 12 heading">
      <p>Edit your Profile</p>
    </div>
    <div class="col-md-12 sub-heading">
      <p>Fill in your profile information</p>
    </div>
  </div>

  

  <div class="col-md-6 formname">
    <label for="fname">First Name</label>
    <br>
    <input type="text" id="fname" name="firstname" value="{{$user->firstName}}" readonly="">
  </div>
  <div class="col-md-6 formname">
    <label for="lname">Last Name</label>
    <br>
    <input type="text" id="lname" name="lastname" value="{{$user->lastName}}" readonly="">
  </div>
  <div class="col-md-12 formname">
    <label for="lname">Profile Picture <span class="recom">(RECOMMENDED)</span></label>
  </div>
  <div class="col-md-2 profilepic">
    <img src="uploads/{{$profile->profilepicture}}  ">
  </div>
  <!-- <div class="col-md-12 dottedborder">
    <span class="attachfiled" id="attachmentfile">Drop file here or</span>
    <a class="attachfile-links" id="attachmentfile" href="#">Browse</a>
    <span class="attachfile" id="attachmentfile">to add attachments</span>
  </div> -->
  <div class="col-md-5">
  <?php
         echo Form::open(array('url' => '/uploadprofilepic','files'=>'true'));
         echo 'Select the file to upload.';
         echo "<div class='choosefile'>".Form::file('image')."</div>";
         echo Form::submit('Upload File');
         echo Form::close();
      ?>
  </div>
  <div class="col-md-12">
  <form action="updateprofile" method="Post"> 
     {{ csrf_field() }} 

  <div class="col-md-6 formname">
    <label for="lname">Per Hour Rate</label>
    <span class="input-group-addon">$</span>
    <input type="text" id="rate" name="perhrate" placeholder="" value="{{$profile->perhourrate}}">
  </div>
  <div class="col-md-12 formname">
    <label for="lname">Your Profile Skills</label>
    <br>
    <input type="text" id="skills" name="skills" placeholder="Type here to add.." value="{{$profile->skills}}">
  </div>
  <div class="col-md-12 formname">
    <label for="lname">Location <span class="recom">(CITY)</span></label>
    <br>
    <input type="text" id="location" name="location" placeholder="Type here to add.."  value="{{$user->location}}">
  </div>
  <div class="col-md-6">
    <input type="submit" value="DONE">  
  </div>
</div>
</div><!--end of content-->
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
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
</html>

    