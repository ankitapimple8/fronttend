<?php
 date_default_timezone_set('Asia/Kolkata');
//echo date('l')
$i= strtotime('today');
echo date('d/m/y h:i:s', $i);
?>
