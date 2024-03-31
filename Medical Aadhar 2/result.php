<?php
$s1=0;
$s2=0;
$s3=0;

$user="root";
$password="";
$dba="medi";
$con=new mysqli("localhost",$user,$password,$dba) or die("not connected");
  if(isset($_GET['back']))
{
	$query=mysqli_query($con,"UPDATE `result` SET `s1`=0 WHERE 1 ") or die(mysqli_error($con));

echo ' <script language="javascript" type="text/javascript">
parent.document.location="prediction.php";
</script>';

}


$query=mysqli_query($con,"SELECT * FROM `result`") or die(mysqli_error($con));

while($row=mysqli_fetch_array($query))
{
 $result=$row['disease'];
 $s1=$row['s1'];
}
 

?>
<html>
     <meta http-equiv = "refresh" content = "10" />

    <body>
<img src="full.png" alt="Nature" class="responsive" width="100%" height="300">
<br><br>

<form method="GET" action="result.php">
<button type="submit" name="back" class="registerbtn">Back</button>
</form>
<br><br>
<center>
<form method="POST" action="result.php" enctype='multipart/form-data'>
  
  <?php
  if(($s1==0)&&($disease==22))
  {
      echo "<br><br>
      <center>
      <h3>Waiting please wait!!!, So please wait</h3>
      </center>";
      
  }
    if(($s1==1))
  {
      echo "<br><br>
      <center>
      <h3>Please press back button to went back</h3>
      </center>";
      
  }
  
if($s1==1)
{
  if($result==0)
  {
      echo "<br><br>
      <center>
      <h3>Influenza Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     }
     else if($result==1)
     {
     
      echo "<br><br>
      <center>
      <h3>Asthma Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
     else if($result==2)
     {
     
      echo "<br><br>
      <center>
      <h3>Tuberculosis Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 else if($result==3)
     {
     
      echo "<br><br>
      <center>
      <h3>Malaria Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }else if($result==4)
     {
     
      echo "<br><br>
      <center>
      <h3>Typhoid Disease  Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 else if($result==5)
     {
     
      echo "<br><br>
      <center>
      <h3>Pneuminia Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 else if($result==6)
     {
     
      echo "<br><br>
      <center>
      <h3>Appendicitius Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 else if($result==7)
     {
     
      echo "<br><br>
      <center>
      <h3>Bird Flu Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 else if($result==8)
     {
     
      echo "<br><br>
      <center>
      <h3>Chikungunya Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 else if($result==9)
     {
     
      echo "<br><br>
      <center>
      <h3>Monkey Pox Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 
	 
	 else if($result==10)
     {
     
      echo "<br><br>
      <center>
      <h3>Diptheria Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 
	 else if($result==11)
     {
     
      echo "<br><br>
      <center>
      <h3>Polio Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 
	 else if($result==12)
     {
     
      echo "<br><br>
      <center>
      <h3>Dengue Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 
	 
	 else if($result==13)
     {
     
      echo "<br><br>
      <center>
      <h3>Jaundice Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 
	 
	 else if($result==14)
     {
     
      echo "<br><br>
      <center>
      <h3>Covid-19 Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 else if($result==15)
     {
     
      echo "<br><br>
      <center>
      <h3>Niphavirus Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 
	 else if($result==16)
     {
     
      echo "<br><br>
      <center>
      <h3>Rabies Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 
	 else if($result==17)
     {
     
      echo "<br><br>
      <center>
      <h3>Swine Flu Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 
	 else if($result==18)
     {
     
      echo "<br><br>
      <center>
      <h3>Cholera Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
	 
	 else if($result==19)
     {
     
      echo "<br><br>
      <center>
      <h3>Rhino virus Disease Detected</h3>
      <br>
       <h3>Results Reports are stored server</h3>";
     
         
     }
}
 ?>
</form>
</body>
</center>
</html>