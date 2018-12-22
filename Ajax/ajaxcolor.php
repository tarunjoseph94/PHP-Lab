<?php
$color=array("red","blue","green","yellow");

$i=$_REQUEST['num'];
echo '<p style="color:'.$color[$i%4].'">This is text</p>';


?>
