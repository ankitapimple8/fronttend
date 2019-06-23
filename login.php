<?php
$conn= mysqli_connect('localhost','root','','student');
//if (mysqli_connect_errno())
//{
//	echo "Error";
//}else{
//	echo "connected";
//}

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	//$age=$_POST['age'];
$query="SELECT password from users WHERE username={'$username'}";
$result= mysqli_query($conn,$query);
$pass=mysqli_fetch_assoc($result);

if($pass['password']==$password)
{
	echo "true";

}else{
	echo"false";

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="login.php">
			username<input type="text" name="username" placeholder="name"><br>
			password<input type="password" name="password" placeholder="password"><br>
			<!--age<input type="text" name="age"><br>-->
		<button type="login" name="submit">LOGIN</button>
      </form>
</body>
</html>