<?php 
session_start();
$_SESSION['message']="";
//connect to database
$conn = mysqli_connect('localhost','root','','db');

if(isset($_POST['register'])){
	   
		$username =$_POST['name'];
		$email =$_POST['email'];
		$password =$_POST['password'];
		



$sql = "INSERT INTO member(username, password, email) VALUES ('$username', '$password', '$email')";
mysqli_query($conn, $sql);
if(mysqli_query==true){
	$_SESSION['message']="Reg Successful";
	header("location:index.php");
}
else{
	$_SESSION['message']="Error";
}
//header("location:index.php");


}
?>
<html>
<head>
<title> Registation </title>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="regi.css" type="text/css">
</head>
<body>
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="regi.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="name" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <!--<input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />-->
     
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
    
  </div>
</div>
</body>
</html>