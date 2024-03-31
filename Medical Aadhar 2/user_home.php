<?php
session_start();
$user="root";
$password="";
$db="medi";
$connect=new mysqli("localhost",$user,$password,$db) or die("not connected");


if(isset($_GET['school']))
{
	echo ' <script language="javascript" type="text/javascript">
parent.document.location="patient_det.php";
</script>';
}

if(isset($_GET['ai']))
{
	echo ' <script language="javascript" type="text/javascript">
parent.document.location="prediction.php";
</script>';

}
if(isset($_GET['gjob']))
{
	echo ' <script language="javascript" type="text/javascript">
parent.document.location="useraddedgjob.php";
</script>';

}
if(isset($_GET['course']))
{
	
	echo ' <script language="javascript" type="text/javascript">
parent.document.location="useraddedcourse.php";
</script>';

}

if(isset($_GET['college']))
{
	
	echo ' <script language="javascript" type="text/javascript">
parent.document.location="history2.php";
</script>';

}
if(isset($_GET['back']))
{
	echo ' <script language="javascript" type="text/javascript">
parent.document.location="home.php";
</script>';
}


?>


<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 33%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Remove extra left and right margins, due to padding */
.row1 {margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

.column1 {
  float: left;
  width: 50%;
  padding: 0 10px;
}
.bg-img1 {
  /* The image used */
  width:100%;

  background-color: white;
  background-color: #FAF2F1;
border-style: redge;
}
/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
 // box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: white;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card1 {
 // box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: white;
}

.body2 {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}
/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
</style>


</head>

<body>

<img src="hos.jpg" alt="Nature" class="responsive" width="100%" height="300">
<br><br>
<form method="GET" action="user_home.php">
<button type="submit" name="back" >Logout</button>
</form>
<br><br>
<div class="bg-img1">
<br>
<h3><center>AI Based Medical Aadhar Web Portal</center></h3>

<br></div>

<br><br>
<form method="GET" action="user_home.php">
<div class="row1">
  <div class="column1">
    <div class="card1">
      <h3>Patient Details</h3>
	  <img src="patient.jpg" alt="Nature" width="30%" height="200px">
   <br><br><button type="submit" name="school" class="registerbtn">View Patient Details</button>
 
      <p>To View the Patient Details</p>
    <br><br> </div>
  </div>

 
  <div class="column1">
    <div class="card1">
      <h3>Patient Medical History</h3>
	    <img src="history.jpg" alt="Nature" width="30%" height="200px">
   <br><br><button type="submit" name="college" class="registerbtn">View Patient Medical History</button>
 
      <p>To view Patient Medical History</p>
      
    </div>
  </div>
 
</div>

<div class="row1">
 

  <div class="column1">
    <div class="card1">
      <h3>AI Prediction</h3>
	  <img src="ai.jpg" alt="Nature" width="30%" height="200px">
   <br><br><button type="submit" name="ai" class="registerbtn">View and Access AI</button>
 
      <p>To View and Access AI Prediction</p>
    <br><br> </div>
  </div>
  </div>
  <!---
 <div class="column1">
    <div class="card1">
      <h3>Goverment Job Details</h3>
	  <img src="gov.jpg" alt="Nature" width="30%" height="200px">
   <br><br><button type="submit" name="gjob" class="registerbtn">View Govt Job Details</button>
 
      <p>To View the Goverment Job Details</p>
    <br><br> </div>
  </div>

</div>

<div class="row1">
 

  <div class="column1">
    <div class="card1">
      <h3>Course Details</h3>
	    <img src="courses.jpg" alt="Nature" width="30%" height="200px">
   <br><br><button type="submit" name="course" class="registerbtn">Course</button>
 
      <p>To view Course</p>
      
    </div>
  </div>

</div>

-->

<br><br>
</body>

</html>
