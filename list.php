<?php 

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student List</title>
<link rel="stylesheet" href="regi.css">
</head>
<body>

<div class="containerDark">
<h1>Student List</h1>
</div>

<div class="containerButton">
<a href="regi.php" class="regi">Registration</a>
<a href="login.php" class="login">Login</a>

</div>

<div class="containerForm">
<?php
session_start();
$conn = mysqli_connect('localhost','root','','db');
$allstudents_query = "SELECT * FROM member";
$allstudents = mysqli_query($conn,$allstudents_query);
echo "<table align=center border=1><tr><td>Name</td><td>Email</td></tr>";
if($allstudents)
{
while ($row = mysqli_fetch_array($allstudents,MYSQLI_ASSOC)){
	$name = $row['name'];
	$mail = $row['email'];
	echo "<tr><td> ".$name." </td><td>  ".$mail ."</td></tr>";
//	echo $name. '-=-'. $mail."<br>"; 
}
echo "</table>";
}
?>

</div>


</body>
</html>




