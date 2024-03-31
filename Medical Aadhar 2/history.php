<?php

session_start();
$user="root";
$password="";
$db="medi";
$connect=new mysqli("localhost",$user,$password,$db) or die("not connected");

				
$query=mysqli_query($connect,"SELECT * FROM `medi_id` WHERE 1 ") or die(mysqli_error($connect));
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
parent.document.location="medi_id.php";
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

.card {
    display: inline-block;
    width: 450px;
    //border: 1px solid #ccc;
    margin: 10px;
    padding: 10px;
	background-color: #f4f4f3;
}

.card img {
    width: 80%;
    height: 200px;
    object-fit: cover;
}

.card h2 {
    margin-top: 0;
}


#search-box {
    margin-top: 20px;
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    font-size: 16px;
}
#filter
{
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 90%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>
<script>
    function filterItems() {
      var input = document.getElementById("filter").value.toLowerCase();
      var cards = document.getElementsByClassName("card");
      for (var i = 0; i < cards.length; i++) {
        var item = cards[i].getElementsByClassName("item-name")[0];
        if (item.innerHTML.toLowerCase().indexOf(input) > -1) {
          cards[i].style.display = "";
        } else {
          cards[i].style.display = "none";
        }
      }
    }
  </script>
  
</head>
<body>
<img src="sth.jpg" alt="Nature" class="responsive" width="100%" height="300">
<br><br>

<form method="GET" action="history.php">
<button type="submit" name="back" class="registerbtn">Back</button>
</form>

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


<br><br>
<center>
<h3>Medical History</h3>
</center>
<center>

<input type="text" id="filter" onkeyup="filterItems()" placeholder="Search by name...">

      <div id="items">
             <?php
 $user="root";
				 $user="root";
				$password="";
				$db="medi";
				$connect=new mysqli("localhost",$user,$password,$db) or die("not connected");
				
				
$query=mysqli_query($connect,"SELECT * FROM `medi_id` WHERE 1 ") or die(mysqli_error($connect));
$x=1;
while($row=mysqli_fetch_assoc($query))
{
$mid = $row["id"];

}
				
				
			$query=mysqli_query($connect,"SELECT * FROM `prescription_details` WHERE `mid`='$mid' ORDER BY `id` DESC ") or die(mysqli_error($connect));
                             $x=1;
while($row=mysqli_fetch_assoc($query))
{
echo '<div class="card">';
echo '<h2 class="item-name">' . $row["hname"] . '</h2>';
echo '<p>Contact : ' . $row["hcontact"] . '</p>';
echo '<p>Address : ' . $row["haddress"] . '</p>';
echo '<p>Doctor : ' . $row["dname"] . '</p>';
echo '<p>Doctor Specialization : ' . $row["dspec"] . '</p>';
echo '<p>Disease Diagnosed : ' . $row["dis"] . '</p>';

echo '<p>Date & Time : ' . $row["datetime"] . '</p>';
echo '<p> Medicine & Timings </p>';
echo '<p> ' . $row["m1"] .'</p>';
echo '<p> ' . $row["t1"] .'</p>';
echo '<p> ' . $row["m2"] .'</p>';
echo '<p> ' . $row["t2"] .'</p>';
echo '<p> ' . $row["m3"] .'</p>';
echo '<p> ' . $row["t3"] .'</p>';
echo '<p> ' . $row["m4"] .'</p>';
echo '<p> ' . $row["t4"] .'</p>';
echo '<p> ' . $row["m5"] .'</p>';
echo '<p> ' . $row["t5"] .'</p>';
echo '<p> ' . $row["m6"] .'</p>';
echo '<p> ' . $row["t6"] .'</p>';
echo '<p> ' . $row["m7"] .'</p>';
echo '<p> ' . $row["t7"] .'</p>';
echo '<p> ' . $row["m8"] .'</p>';
echo '<p> ' . $row["t8"] .'</p>';
echo '<p> Days : ' . $row["days"] .'</p>';
echo '</div>';
}
mysqli_close($connect);
?>

       
  
</div>
</center>


</body>
</html>
