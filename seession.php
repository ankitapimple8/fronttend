<?php
session_start();
$_SESSION['name']='ANKITA';
echo $_SESSION['name'];
?>
<DOCTYPE html>
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