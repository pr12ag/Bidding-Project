<!DOCTYPE html>
<html lang="en">
<head>

  <title>View Jobs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css\viewjob.css') }}">
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
<center><h3>PROJECTS</h3>
<table> 
<tr>
  <th>TITLE</th>
  <th>DESCRIPTION</th>
  <th>DURATION</th>
  <th>COST</th>
  <!-- <th>DEADLINE</th> -->
  <th>ATTACHMENT</th>

</tr>

     @foreach($projects as $row)
              <form action="#" method="get">
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


                    
                    <!-- <td> -->
                    
                   <!--  <td>
                        <button type="hidden" class="btn btn-primary">view</button>
                    </td> -->
                </tr>
              </form>
     @endforeach
                        
</table>
</center>
</div>
</div>

<div class="row">
<div class="col-md-12 jobs">
<center><h3>PROPOSALS</h3>
<table> 
<tr>
  <th>PROJECT ID</th>
  <th>PROPOSAL</th>
  <th>DURATION</th>
  <th>COST</th>
  <th>UPFRONT</th>

  
 <!--  <th>VIEW JOB</th> -->
</tr>

     @foreach($proposals as $row)
              <form action="#" method="get">
                <input type="hidden" name="project_id" value="{{$row->id}}" >
                <tr>

                    <td>{{$row->project_id}}</td>
                    <td>{{$row->description}}</td>
                    <td>{{$row->duration}}</td>
                    <td>{{$row->cost}}</td>
                    <td>
                    <?php
                    if(isset($row->upfront_value))
                      echo $row->upfront_value;
                      else
                        echo "0";
                    ?>%
                    </td>

                   

                    
                   <!--  <td>
                        <button type="hidden" class="btn btn-primary">view</button>
                    </td> -->
                </tr>
              </form>
     @endforeach
                        
</table>
</div>
</div>
</div>
</div>
</div>
</div>

</center>

</body>
@if(isset($msg)) 
        echo "<script type='text/javascript'>alert('$msg')</script>";
@endif
</html>








