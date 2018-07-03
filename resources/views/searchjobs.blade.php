<!DOCTYPE html>
<html>
<head>
  <title>Search Job</title>
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/searchjobs.css') }}">
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
          <li><a href="">Search Jobs</a></li>
          <li><a href="viewjob">View Jobs</a></li>
          <li><a href="logout">LOGOUT</a></li>
      </ul>
    </div>
    </div>
</div>
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
<div class="row">
<div class="col-md-12 jobs">
<table> 
<tr>
  <th>TITLE</th>
  <th>DESCRIPTION</th>
  <th>DURATION</th>
  <th>COST</th>
  <!-- <th>DEADLINE</th> -->
  <th>ATTACHMENT</th>
  <th>VIEW JOB</th>
</tr>

     @foreach($projects as $row)
              <form action="proposal" method="get">
                <input type="hidden" name="project_id" value="{{$row->id}}" >
                <tr>

                    <td>{{$row->title}}</td>
                    <td>{{$row->description}}</td>
                    <td>{{$row->durtion}}</td>
                    <td>{{$row->cost}}</td>
                    <?php
                    $url= "#";
                    if(isset($row->attachment)&&$row->attachment!="")
                      $url = "/download/attachment/".$row->attachment;
                    ?>
                    <td><a href="{{$url}}">
                    <img src="../img/office.png"></a></td>

                    
                    <td>
                        <button type="submit" class="btn btn-primary">Make Proposal</button>
                    </td>
                </tr>
              </form>
     @endforeach
                        
</table>
</div>
</div>
</div>
</body>
<?php 
      if(isset($msg) ) 
        echo "<script type='text/javascript'>alert('$msg')</script>";
      
?>
</html>