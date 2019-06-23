<?php
$conn= mysqli_connect('localhost','root','','student');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$rollno=$_POST['rollno'];
	$age=$_POST['age'];
$query="INSERT INTO student(name,rollno,age) VALUES('$name','$rollno','age')";
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
		
		<form method="POST" action="tableform.php">
			name<input type="text" name="name"><br>
			rollno<input type="text" name="rollno"><br>
			age<input type="text" name="age"><br>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>