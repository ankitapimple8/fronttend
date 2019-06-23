<?php
$pass="";
$p=password_hash($pass, PASSWORD_BCRYPT);
//$p2=md5($pass);
//$p3=hash('sha256',$pass)echo $p1;
//echo "<br>"
//echo $p2;
//echo "<br>";
//echo $p3;
if(password_verify($pass,$p))
{
	echo "connected";
}
?>