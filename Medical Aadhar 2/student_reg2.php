 <?php  
 $connect = mysqli_connect("localhost", "root", "", "medi");  
 if(isset($_GET["back"])) 
 {
	 header("location:admin.php");
 }
 
 if(isset($_POST["insert"]))  
 {  
if((isset($_POST["name"]))&&(isset($_POST["email"]))&&(isset($_POST["contact"]))&&(isset($_POST["address"]))&&(isset($_POST["password"])))
{    
{

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$password=$_POST['password'];


$emailval = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
$mob="/^[1-9][0-9]*$/";

if(ctype_alpha(str_replace(' ', '', $name)) === false)
{
$msg = "Name must contain letters and spaces only";
print '<script>alert(" '.$msg.'");</script>';
}
else if(!preg_match($mob, $contact))
{
$msg="Please enter a valid contact number";
print '<script>alert(" '.$msg.'");</script>';
}
else
{
$query=mysqli_query($connect,"SELECT `id` FROM `hospital_details` WHERE `name`= '$name' && `email`= '$email' && `contact`= '$contact' ") or die(mysqli_error($connect));
$row=mysqli_fetch_array($query);
$sid=$row['id'];

//if($degree!=NULL)
{

if($sid==NULL)
{
	//if($age>=25)
	{
 $query = "INSERT INTO `hospital_details` (`name`, `email`, `contact`, `address`, `password`) VALUES ('$name','$email','$contact','$address','$password')";

 if(mysqli_query($connect, $query))  
      {  
print '<script>alert("Hospital details uploaded successfully ,Thankyou");</script>';
	  }
	}	 
}
else{
	       echo ' <script language="javascript" type="text/javascript">
alert("Given details matched with another registered Hospital, So you Cant able to register, please try another");
parent.document.location="student_reg2.php";
</script>';
	
}

}

}
}


}
    

else{
	     echo ' <script language="javascript" type="text/javascript">
alert("Please fill all fields");
parent.document.location="student_reg2.php";
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

	
 <h3 align="center" color="red">Hospital Registration</h3>  	 
	 </head>  
      <body>  
          
		   
<form method="GET" action="student_reg2.php">
<button type="submit" name="back" >Back</button>
</form>

		 
    
     <br>  <hr><br><br>
	 
	<form method="POST" action="student_reg2.php" enctype="multipart/form-data" id="form" >  
    <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Hospital Name</b></label>
    <input type="text" placeholder="Enter  Name" name="name" id="email" required>
	<label for="email"><b>Email ID</b></label>
    <input type="text" placeholder="Enter Email ID" name="email" id="email" required>
	<label for="email"><b>Contact</b></label>
    <input type="text" placeholder="Enter Contact No" name="contact" id="email" required>
	<label for="email"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" id="email" required>
	<label for="psw"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="password" id="psw" required>

    
    <button type="submit" class="registerbtn" name="insert">Register</button>
  </div>
  
</form>
	 </html>