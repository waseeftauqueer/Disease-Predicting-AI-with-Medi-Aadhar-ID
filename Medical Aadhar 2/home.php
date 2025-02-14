<?php
if(isset($_GET['admin']))
{
echo ' <script language="javascript" type="text/javascript">
parent.document.location="admin.php";
</script>';
}

if(isset($_GET['user']))
{
echo ' <script language="javascript" type="text/javascript">
parent.document.location="user.php";
</script>';
}



?>


<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/home.css" type="text/css" rel="stylesheet">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/about.css" type="text/css" rel="stylesheet">
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
.column2 {
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

<img src="th.jpg" alt="Nature" class="responsive" width="100%" height="300">
<br><br>

<div class="bg-img1">
<br>
<h3><center>AI Based Medical Aadhar Web Portal</center></h3>
<br>
</div>
<br><br>
<div class="row">
  <div class="column">
    <div class="card">
      <h3>Our Vision</h3>
	  <img src="about/vision.png" alt="Nature" width="30%" height="100px">

            <p align="justify">"To create an intuitive, secure online platform leveraging AI for accurate disease prediction based on symptoms, and comprehensive lifelong medical history management, promoting efficient and personalized healthcare for all."</p>
    <br><br> </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Our Mission</h3>
	    <img src="about/mission.png" alt="Nature" width="30%" height="100px">

            <p align="justify">"Our mission is to revolutionize healthcare accessibility by providing a user-friendly AI-powered platform for accurate diagnosis, comprehensive medical record management, and tailored treatment plans, ensuring improved health outcomes worldwide."</p>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Our Values</h3>
	    <img src="about/values.png" alt="Nature" width="50%" height="100px">

           <p align="justify">""Integrity, empathy, innovation, inclusivity, and reliability guide our commitment to fostering trust, compassion, cutting-edge technology, accessibility, and excellence in healthcare for all."</p>
     
    </div>
  </div>
  
</div>

<br><br>

<div class="bg-img1">
<br>
<h3><center>About Us</center></h3>

<br></div>

<br><br>

<div class="row1">
 
  <div class="column1">
    <div class="card1">
        <img src="about/institute.png" alt="Nature" width="10%" height="100px">

      <p align="justify">"We are a dedicated team striving to advance healthcare through technology. Our expertise in AI and commitment to patient-centric solutions drive us. With a focus on accuracy, privacy, and convenience, we aim to empower individuals and healthcare providers for a healthier future."</div>
  </div
 
</div>
<br><br>
<div class="bg-img1">
<br><br>
<h3><br><center>Contact US</center></h3>
<br>
</div>
<br><br>

<div class="row1">
 
  <div class="column1">
    <div class="card1">
        <img src="cnt.jpg" alt="Nature" width="10%" height="100px">

      <p align="center">Waseef          email: waseeftauqueera@gmail.com</p>
	  
<p align="center">Ruthresh         email: truthresh096@gmail.com</p>
    </div>
  </div
 
</div>
</div>
<br><br>


<div class="bg-img1">
<br>
<h3><center>Login</center></h3>

<br></div>

<br><br>

<div class="row1">
 
  <div class="column2">
    <div class="card1">
        <img src="admin.png" alt="Nature" width="20%" height="100px">

    <br> <br> 
<form method="GET" action="home.php">
<button type="submit" name="admin" class="registerbtn">Hospital Login</button>
</form>
    </div>
  </div
 
</div>

  <div class="column2">
    <div class="card1">
        <img src="user.png" alt="Nature" width="20%" height="100px">
<br><br> 
     
<form method="GET" action="home.php">
<button type="submit" name="user" class="registerbtn">Patient Login</button>
</form>
    </div>
  </div
 
<br><br>
<br><br>
</div>
<br><br>

<br><br>
<script>

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

</script>
</body>

</html>
