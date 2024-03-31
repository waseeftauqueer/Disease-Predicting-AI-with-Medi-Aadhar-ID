 <?php  
 $connect = mysqli_connect("localhost", "root", "", "medi");  
 if(isset($_GET["back"])) 
 {
	 header("location:admin_home.php");
 }
 
 if(isset($_POST["insert"]))  
 {  
if((isset($_POST["id"]))&&(isset($_POST["dname"]))&&(isset($_POST["dspec"]))&(isset($_POST["dis"]))&&(isset($_POST["m1"]))&&(isset($_POST["t1"]))&&(isset($_POST["days"])))
{    
{

$id=$_POST['id'];
$dname=$_POST['dname'];
$dspec=$_POST['dspec'];
$dis=$_POST['dis'];
$m1=$_POST['m1'];
$t1=$_POST['t1'];
$m2=$_POST['m2'];
$t2=$_POST['t2'];
$m3=$_POST['m3'];
$t3=$_POST['t3'];
$m4=$_POST['m4'];
$t4=$_POST['t4'];
$m5=$_POST['m5'];
$t5=$_POST['t5'];
$m6=$_POST['m6'];
$t6=$_POST['t6'];
$m7=$_POST['m7'];
$t7=$_POST['t7'];
$m8=$_POST['m8'];
$t8=$_POST['t8'];
$days=$_POST['days'];


$emailval = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
$mob="/^[1-9][0-9]*$/";

if(ctype_alpha(str_replace(' ', '', $dname)) === false)
{
$msg = "Name must contain letters and spaces only";
print '<script>alert(" '.$msg.'");</script>';
}
else
{
$query=mysqli_query($connect,"SELECT `id` FROM `hospital_id` WHERE 1") or die(mysqli_error($connect));
$row=mysqli_fetch_array($query);
$hid=$row['id'];

$medi = $id-157240; 
//echo $id;
//echo $medi;
$query2=mysqli_query($connect,"SELECT 'id' FROM `user_details` WHERE `id`='$medi'") or die(mysqli_error($connect));
$row2=mysqli_fetch_array($query2);
$sid=$row2['id'];


$query3=mysqli_query($connect,"SELECT * FROM `hospital_details` WHERE `id`='$hid'") or die(mysqli_error($connect));
$row2=mysqli_fetch_array($query3);
$hname=$row2['name'];
$hemail=$row2['email'];
$hcontact=$row2['contact'];
$haddress=$row2['address'];


//if($degree!=NULL)
{

if($sid!=NULL)
{
	//if($age>=25)
	{
 $query = "INSERT INTO `prescription_details` (`mid`, `dname`, `dspec`, `dis`, `m1`, `t1`, `m2`, `t2`, `m3`, `t3`, `m4`, `t4`, `m5`, `t5`, `m6`, `t6`, `m7`, `t7`, `m8`, `t8`, `hid`, `hname`, `hemail`, `hcontact`, `haddress`, `days`) VALUES ('$medi','$dname','$dspec','$dis','$m1','$t1','$m2','$t2','$m3','$t3','$m4','$t4','$m5','$t5','$m6','$t6','$m7','$t7','$m8','$t8','$hid','$hname','$hemail','$hcontact','$haddress','$days')";

 if(mysqli_query($connect, $query))  
      {  
  //echo $medi;
print '<script>alert("Prescription details uploaded successfully ,Thankyou");</script>';
	  }
	}	 
}
else{
/*	       echo ' <script language="javascript" type="text/javascript">
alert("Medical ID Not Found, please try another");
parent.document.location="add_prescriptions.php";
</script>';
	*///echo $medi;
}

}

}
}


}
    

else{
	     echo ' <script language="javascript" type="text/javascript">
alert("Please fill all fields");
parent.document.location="add_prescriptions.php";
</script>';
}	
 }  
 ?>  
 
 
 <!DOCTYPE html>  
 <html>  
      
	  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Hospital Registration</title>
	<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

	
 <h3 align="center" color="red">Add Medical Prescriptions</h3>  	 
	 </head>  
      <body>  
          
		   
<form method="GET" action="add_prescriptions.php">
<button type="submit" name="back" >Back</button>
</form>

		 
    
     <br>  <hr><br><br>
	 
	<form method="POST" action="add_prescriptions.php" enctype="multipart/form-data" id="form" >  
    <div class="container">
    <h1>ADD Prescriptions</h1>
    <p></p>
    <hr>

    <label for="email"><b>Patient's Medical ID</b></label>
    <input type="text" placeholder="Enter  ID" name="id" id="email" required>
	
	<label for="email"><b>Doctor Name</b></label>
    <input type="text" placeholder="Enter Doctor Name" name="dname" id="email" required>
	
	<label for="email"><b>Doctor Specialization</b></label>
    <input type="text" placeholder="Enter Doctor Specialization" name="dspec" id="email" required>
	
	<label for="email"><b>Doctor Diagnosed Disease</b></label>
    <input type="text" placeholder="Enter Doctor Diagnosed Disease" name="dis" id="email" required>
	
	<label for="email"><b>Medicine 1</b></label>
    <input type="text" placeholder="Medicine 1 Name" name="m1" id="email" required>
	
	<label for="email"><b>Medicine 1 Timings</b></label>
    <input type="text" placeholder="Medicine 1 Timings" name="t1" id="email" required>
	
	<label for="email"><b>Medicine 2</b></label>
    <input type="text" placeholder="Medicine 2 Name" name="m2" id="email" >
	
	<label for="email"><b>Medicine 2 Timings</b></label>
    <input type="text" placeholder="Medicine 2 Timings" name="t2" id="email" >
	
	
	<label for="email"><b>Medicine 3</b></label>
    <input type="text" placeholder="Medicine 3 Name" name="m3" id="email" >

	<label for="email"><b>Medicine 3 Timings</b></label>
    <input type="text" placeholder="Medicine 3 Timings" name="t3" id="email" >
	
	<label for="email"><b>Medicine 4</b></label>
    <input type="text" placeholder="Medicine 4 Name" name="m4" id="email" >
	
	<label for="email"><b>Medicine 4 Timings</b></label>
    <input type="text" placeholder="Medicine 4 Timings" name="t4" id="email" >
	
	<label for="email"><b>Medicine 5</b></label>
    <input type="text" placeholder="Medicine 5 Name" name="m5" id="email" >
	
	<label for="email"><b>Medicine 5 Timings</b></label>
    <input type="text" placeholder="Medicine 5 Timings" name="t5" id="email" >
	
	<label for="email"><b>Medicine 6</b></label>
    <input type="text" placeholder="Medicine 6 Name" name="m6" id="email" >
	
	<label for="email"><b>Medicine 6 Timings</b></label>
    <input type="text" placeholder="Medicine 6 Timings" name="t6" id="email" >
	
	<label for="email"><b>Medicine 7</b></label>
    <input type="text" placeholder="Medicine 7 Name" name="m7" id="email" >
	
	<label for="email"><b>Medicine 7 Timings</b></label>
    <input type="text" placeholder="Medicine 7 Timings" name="t7" id="email" >
	
	<label for="email"><b>Medicine 8</b></label>
    <input type="text" placeholder="Medicine 8 Name" name="m8" id="email" >
	
	<label for="email"><b>Medicine 8 Timings</b></label>
    <input type="text" placeholder="Medicine 9 Timings" name="t8" id="email" >
	
	<label for="email"><b>How Many Days</b></label>
    <input type="text" placeholder="Days" name="days" id="email" required>
	
    
    <button type="submit" class="registerbtn" name="insert">ADD</button>
  </div>
  
</form>
	 </html>