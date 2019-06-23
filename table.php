<?php
$conn= mysqli_connect('localhost','root','','student');
if (mysqli_connect_errno())
{
	echo "Error";
}else{
	echo "connected";
}
$query="SELECT * FROM student";
$result= mysqli_query($conn,$query);
$student= mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--?php print_r($student); ?-->
<?php foreach ($student as $i ):?> 
	<H3><a href="table1.php?id=<?php echo $i['id'];?>"><?php echo $i['name'];?></H3>
	<!--<H3><?php //echo $i['rollno'];?></H3>-->
	<!--H3><?php //echo $i['age'];?></H3-->
	<hr>
<?php endforeach;?>


</body>
</html>