<!DOCTYPE html>
<html lang="en">
<head>
  <title>post-a-job form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css\postjob.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <li><a href="userHome">Home</a></li>
          <li><a href="">Post a Job </a></li>
          <li><a href="searchjobs">Search Jobs</a></li>
          <li><a href="viewjob">View Jobs</a></li>
          <li><a href="logout">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</div>

</header>

<div class="container">
	<!-- <form action="postjob" method="post"> -->
   <?php
         echo Form::open(array('url' => '/postjob','files'=>'true'));
         ?>
   {{ csrf_field() }} 
    <div class="headingjobpost"><h1><center>JOB POST</center></h1></div> 
      <div class="form-group abc">
      <label for="email">Project Category</label>
      
       <select name="category">
            
            <option value="Marketing" class="loct">Marketing</option>
            <option value="Design" class="common">Design</option>
            <option value="Buisness Support" class="common">Buisness Support</option>
            <option value="Writing & Translation" class="common">Writing & Translation</option>
            <option value="Software Development" class="common">Software Development</option>
            <option value="Web Designer" class="common">Web Designer</option>
        </select> 
      </div>
      <div class="form-group abc">
      <label for="pwd">Project Title</label>
      <input type="text" class="form-control" id="pwd" placeholder="Project Title" name="projectTitle" required="">
      </div>
      <div class="form-group  abc">
      <label for="pwd">Project Description</label>
      <textarea type="text" class="form-control" id="pwd" row-="5" placeholder="Project Description" name="projectDescription" required></textarea >
      </div>
      <div class="form-group  abc">
      <label for="pwd">Project Price</label>
      
      <!-- <span class="input-group-addon">Fix</span> -->
      <input id="pwd" type="text" class="form-control" name="projectPrice" placeholder="in dollars.." required="">
      </div>
      
      <div class="form-group  abc">
      <label for="pwd">Duration</label>
      <input type="text" class="form-control" id="pwd" placeholder="Duration" name="duration" required="">
      </div>
      <!-- <div class="form-group  abc">
      <label for="pwd">Deadline</label>
      <input type="date" class="form-control" id="pwd" placeholder="Deadline" name="deadline" required="">
      </div> -->
      
      <div class="form-group  abc">
      <label for="pwd">Attachment (Not more than 5MB)</label>
      <input type="file" class="form-control" id="pwd" placeholder="optional" name="attachment">
      </div>
      <button type="submit" class="btn btn-default post">POST JOB</button>
      </form>
    </div>
  </body>
  <?php 
      if(isset($msg)) 
        echo "<script type='text/javascript'>alert('$msg')</script>";
      
  ?>
</html>