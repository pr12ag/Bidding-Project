  <!DOCTYPE html>
<html lang="en">
<head>
  <title>post-a-job form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css\proposal.css">
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
          <li><a href="postjob">Post a Job </a></li>
          <li><a href="searchjobs">Search Jobs</a></li>
          <li><a href="viewjob">View Jobs</a></li>
          <li><a href="logout">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</div>
</header>
<div class="container ">
<div class="row projectproposal">
<div class="col-md-12">
<div class="col-md-6">
  <form action="" method="">
   
    <div class="headingjobpost"><h1>JOB</h1></div> 
      <div class="form-group abc">
      <label for="email">Project Category</label>
      <input type="text" value="{{$category}}" readonly="">

            
      </div>
      <div class="form-group abc">
      <label for="pwd">Project Title</label>
      <br>
      <input type="text" value="{{$project->title}}" readonly="">
      </div>
      <div class="form-group  abc">
      <label for="pwd">Project Description</label>

      <input type="textarea" value="{{$project->description}}" readonly="">
      </div>
      <div class="form-group  abc">
      <label for="pwd">Project Price</label>
      <br>
      
      <!-- <span class="input-group-addon">Fix</span> -->
      <input id="pwd" type="text" value="{{$project->cost}}" readonly="">
      </div>
      
      <div class="form-group  abc">
      <label for="pwd">Duration</label>
      <br>
      <input type="text" value="{{$project->durtion}}" readonly="">
      </div>
      
      
      <!-- <div class="form-group  abc">
      <label for="pwd">Attachment</label>
      <br>
      <input type="" value="" readonly="">
      </div> -->
      
      </form>
</div>
<div class="col-md-6">
  <form action="jobProposal" method="post">
    {{ csrf_field() }} 
    <div class="heading"><h1>PROPOSAL</h1></div> 
    
   
    <div class="form-group  abc">
      <label for="pwd">Proposal</label>
      <textarea class="form-control" id="pwd" row="5" placeholder="" name="proposal" required> </textarea>
      </div>
    <div class="form-group  def">
      <label for="pwd">Proposal Price</label>
      <div class="input-group">
      <span class="input-group-addon">$</span>
      <input id="msg" type="text" class="form-control" name="price" placeholder="in dollars.." required="">
    </div>
    </div>
    <div class="form-group  abc">
      <label for="pwd">Duration of Job</label>
      <input type="text" class="form-control" id="pwd" placeholder="" name="duration" required="">
    </div>
    <div class="form-group  abc">
      <label for="pwd"> UpFront Value(Optional) </label>
      <input type="text" class="form-control" id="pwd" placeholder="" name="upfront">
      <div class=" col-xs-offset-3">
            <p>Min: 25% Max: 40%</p>
      </div>
    </div>
    <input type="hidden" name="project_id" value="{{$project->id}}">
  <button type="submit" class="btn btn-default post">PROPOSAL</button>
  </form>
</div>
</div>
</div>
</div>
</div>
</body>
<?php 
      if( isset($msg)) 
        echo "<script type='text/javascript'>alert('$msg')</script>";
      
?>
</html>
   