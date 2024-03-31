<?php

session_start();
$user="root";
$password="";
$db="medi";
$connect=new mysqli("localhost",$user,$password,$db) or die("not connected");

				
$query=mysqli_query($connect,"SELECT * FROM `user_id` WHERE 1 ") or die(mysqli_error($connect));

$x=1;
while($row=mysqli_fetch_assoc($query))
{
$mid = $row["id"];
}

$query=mysqli_query($connect,"SELECT * FROM `user_details` WHERE `id`='$mid' ORDER BY `id` DESC ") or die(mysqli_error($connect));
                             $x=1;
while($row=mysqli_fetch_assoc($query))
{

$uname = $row["name"];
$ugender = $row["gender"];
$udob = $row["dob"];
$ucontact = $row["contact"];
$uaddress = $row["address"];
$ename = $row["ename"];
$erelation = $row["erelation"];
$econtact = $row["econtact"];

}


if(isset($_GET['back']))
{
	echo ' <script language="javascript" type="text/javascript">
parent.document.location="user_home.php";
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
  width: 100%;
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

<form method="GET" action="patient_det.php">
<button type="submit" name="back" >Back</button>
</form>

<br><br>



<div class="bg-img1">
<br>
<h3><center>AI Based Medical Aadhar Web Portal</center></h3>

<br></div>

<br><br>

<div class="row1">
  <div class="column1">
    <div class="card1">
       <img src="medicine.png" alt="Nature" width="10%" height="100px"><br><br>
    <center>
<h3>Patient Details</h3>
<h4>Patient Name: <?php echo $uname;  ?></h4>
<h4>Gender: <?php echo $ugender;  ?></h4>
<h4>DOB: <?php echo $udob;  ?></h4>
<h4>Contact: <?php echo $ucontact;  ?></h4>
<h4>Address: <?php echo $uaddress;  ?></h4>
<h4>Emergency Contact Person: <?php echo $ename;  ?></h4>
<h4>E-Contact No: <?php echo $econtact;  ?></h4>
<h4>Relation: <?php echo $erelation;  ?></h4>
</center>


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
