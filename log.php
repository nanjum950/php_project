<?php 
session_start();
$_SESSION['message']="";
//connect to database
$conn = mysqli_connect('localhost','root','','db');

if(isset($_POST['login'])){
	   
		$username =$_POST['name'];
		$password =$_POST['password'];
		

$sql="SELECT * FROM member WHERE username='$username' AND password='$password'";
$result=mysqli_query($conn,$sql);

//if (mysqli_num_rows($result)==1){
	if($result){
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if($count == true){
	$_SESSION['message']="you are logged in";
	$_SESSION['username']=$username;
header("location:index.php");
	}
	}

else{
	$_SESSION['message']="error";
}
	
}

?>
<html>
<head>
<title> Log In </title>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="regi.css" type="text/css">
</head>
<body>
<div class="body-content">
  <div class="module">
    <h1>Log In</h1>
    <form class="form" action="log.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="name" required />
      
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <!--<input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />-->
     
      <input type="submit" value="Login" name="login" class="btn btn-block btn-primary" />
    </form>
    <a href="regi.php" class="regi">Registration</a>
  </div>
</div>
</body>
</html>