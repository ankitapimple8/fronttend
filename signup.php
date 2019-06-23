<?php
$conn= mysqli_connect('localhost','root','','student');
if (mysqli_connect_errno())
{
	echo "Error";
}else{
	echo "connected";
}

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	//$age=$_POST['age'];
$query="INSERT INTO users(username,password) VALUES('$username','$password')";
$result= mysqli_query($conn,$query);
}
//$student= mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<body>
		
		<form method="POST" action="signup.php">
			username<input type="text" name="username" placeholder="name"><br>
			password<input type="password" name="password" placeholder="password"><br>
			<!--age<input type="text" name="age"><br>-->
		<button type="submit" name="submit">Submit</button>
      </form>

</body>
</html>