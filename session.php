<?php
session_start();
if(isset($_POST['submit'])){
	$_SESSION['username']=$_POST['username'];
	header('Location:first.php');
	
	echo $_SESSION['username'];


}
//$_SESSION['name']='ANKITA';
//echo $_SESSION['name'];
//unset($_SESSION['name']);
	//echo $_SESSION['name'];
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		
		<form method="POST" action="first.php">

	username<input type="text" name="username"><br>
	password<input type="password" name="password"><br>

	<input type="submit" name="submit" value="submit">
	
	</body>
	</html>
