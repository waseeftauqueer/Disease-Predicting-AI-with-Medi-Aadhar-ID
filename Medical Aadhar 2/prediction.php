<?php
 
if(isset($_GET['submit']))
{
    
    $s1=$_GET['s1'];
    $s2=$_GET['s2'];
    $s3=$_GET['s3'];
    $s4=$_GET['s4'];
    $s5=$_GET['s5'];
    $s6=$_GET['s6'];
    $s7=$_GET['s7'];
    $s8=$_GET['s8'];
    $s9=$_GET['s9'];
    $s10=$_GET['s10'];
    $s11=$_GET['s11'];
    $s12=$_GET['s12'];
    $s13=$_GET['s13'];
    $s14=$_GET['s14'];
    $s15=$_GET['s15'];
    
$user="root";
$password="";
$dba="medi";
$db=new mysqli("localhost",$user,$password,$dba) or die("not connected");
                
$query=mysqli_query($db,"UPDATE `prediction` SET `s1`='$s1',`s2`='$s2',`s3`='$s3',`s4`='$s4',`s5`='$s5',`s6`='$s6',`s7`='$s7',`s8`='$s8',`s9`='$s9',`s10`='$s10',`s11`='$s11',`s12`='$s12',`s13`='$s13',`s14`='$s14',`s15`='$s15' WHERE 1 ") or die(mysqli_error($db));
$query=mysqli_query($db,"UPDATE `result` SET `disease`=22, `s1`=1 WHERE 1 ") or die(mysqli_error($db));

    echo ' <script language="javascript" type="text/javascript">
  alert("You will be forwarded to result page");
  parent.document.location="result.php";
 </script>';


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
  background-color: #F8F8FF;
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

<img src="full.png" alt="Nature" class="responsive" width="100%" height="300">
<br><br>
<br><br>
<div class="bg-img1">
<br>

<form method="GET" action="prediction.php">
<button type="submit" name="back" class="registerbtn">Back</button>
</form>
<br><br>
<h3><center>AI Based Medical Aadhar Web Portal</center></h3>

<br></div>

<br><br>
<form method="GET" enctype="multipart/form-data" action="prediction.php" id="form">

  <div class="column1">
      <div class="card1">
      <h3>Is your family have sequence of any Genetic oriented Disease</h3>
	    <img src="genetic.png" alt="Nature" width="20%" height="20%" required>
  <br><br> 
 <input type="text" name="genetic" placeholder="if No fill NILL" >     
    </div>
    <br><br> 
    <div class="card1">
      <h3>Fever</h3>
	    <img src="fever.jpg" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s1" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
    <br><br>
    
    <div class="card1">
      <h3>Fatique</h3>
	    <img src="fatique.jpg" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s2" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
    
<br><br>

     <div class="card1">
      <h3>Vomiting</h3>
	    <img src="vomiting.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s3" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
    <br><br>
    
    <div class="card1">
      <h3>Diarrhea</h3>
	    <img src="diarrhea.png" alt="Nature" width="10%" height="10%">
  <br><br> 
 <select name="s4" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
    
<br><br>

    <div class="card1">
      <h3>Cough</h3>
	    <img src="cough.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s5" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
    <br><br>
    
    <div class="card1">
      <h3>Joint Pain</h3>
	    <img src="joint.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s6" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
    <br><br>
    
    <div class="card1">
      <h3>Nausea</h3>
	    <img src="nausea.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s7" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
    
<br><br>

  
    <div class="card1">
      <h3>Muscle Aches</h3>
	    <img src="muscle.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s8" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
    
<br><br>

  
    <div class="card1">
      <h3>Sore Throat</h3>
	    <img src="throat.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s9" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      <br><br>
    </div>
       <br><br>
    <div class="card1">
      <h3>Head Ache</h3>
	    <img src="head.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s10" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      <br><br>
    </div>
<br><br>
   <div class="card1">
      <h3>Chest Pain</h3>
	    <img src="chest.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s11" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
      <br><br>

   <div class="card1">
      <h3>Abdominal Pain</h3>
	    <img src="abdominal.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s12" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
	<br><br>

   <div class="card1">
      <h3>Sweating</h3>
	    <img src="sweating.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s13" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
	<br><br>

   <div class="card1">
      <h3>Difficulty in Breathing</h3>
	    <img src="breath.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s14" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
	<br><br>

   <div class="card1">
      <h3>Wheezing</h3>
	    <img src="wheezing.png" alt="Nature" width="20%" height="20%">
  <br><br> 
 <select name="s15" form="form">
  
  <option value="1">Yes</option>
  <option value="0">No</option>
  
  </select>
      
    </div>
<br><br>
<center>
<input type="submit" name="submit">
</center>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
  </div>
  </form>
</body>

</html>
