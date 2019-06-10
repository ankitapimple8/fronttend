<?php 

$ch=3;
$a=7;
$b=3;
$c;
switch ($ch)
{
	case 1:
	$c=$a+$b;
	echo ($c);
	break;

	case 2:
	$c=$a-$b;
	echo ($c);
	break;

	case 3:
	$c=$a*$b;
	echo ($c);
	break;

	case 4:
	$c=$a/$b;
	echo ($c);
	break;
	 default:
	 echo "invalid input";
	 break;
}
