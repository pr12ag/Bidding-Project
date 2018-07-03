<!DOCTYPE html>
<html lang="en">
<head>
  <title>profile</title>
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
<!--content-->
<div class="container">
  <div class="row">
    <div class="col-md-12 profile-heading">
      <p>Profile</p>
    </div>
    <div class="col-md-4 profile-pic">
      <img src="uploads/{{$profile->profilepicture}}">
    </div>
    <div class="col-md-8 profile-name">
      <p>Pragya Sharma</p>
    </div>
    <hr>
  </div>
  
  <div class="row">
    <div class="col-md-4 info">
      <div class="col-md-12 rate-info">
        <p>{{$profile->perhourrate}} $</p>
      </div>
      <div class="col-md-12 skills-info">
        <p>{{$profile->skills}}</p>
      </div>
      <div class="col-md-12 location-info">
        <p>{{$user->location}}</p>
      </div>
      <div class="col-md-12 awards-info">
      <p>no.of awards</p>
      </div>
      <div class="col-md-12 edit-btn">
        <a href="editprofile">EDIT</a>
      </div>
      <div class="vl"></div>
    </div>
    <div class="col-md-8 buyer-seller-content">
  <div class="row">
    <div class="col-md-12 tab">
  <button class="col-md-6 tablinks" onclick="openJob(event, 'projects')" id="defaultOpen">Projects</button>
  <button class="col-md-6 tablinks" onclick="openJob(event, 'proposals')">Proposals</button>
</div>
</div>
    <div id="projects" class="col-md-12 jobs">
  <center>
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

                </tr>
              </form>
     @endforeach
                        
</table>
</center>
</div>
<div id="proposals" class="col-md-12 jobs">
<center>
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
</center>

</div>
</div>
  </div>
</div>
<!--end of content-->
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
<script>
function openJob(evt, jobName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("jobs");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(jobName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>