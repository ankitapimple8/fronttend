<?php
session_start();
$_SESSION['name']='Ankita';
echo $_SESSION['name']
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo "<h1>".$_SESSION['name']." has logged in</h1>";
			?>

</body>
</html>
<!--script type="text/javascript">
	alert("login");
</script-->
<!--!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="first.php">

email<input type="text" name="email"><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php
if(filter_has_var(INPUT_POST,"submit"))
{
	$email=$_POST['email'];
	$email=filter_var($email,FILTER_SANITIZE_EMAIL);
	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo "<br>";
		echo $email;
		echo "<br>";
		echo "vaidated";
	}
else
{
echo "<br>";
	echo "invalidated";
}
}
?>