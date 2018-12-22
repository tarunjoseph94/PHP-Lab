<?php
$i=$_REQUEST['count'];
$img=array("img1.jpg","img2.jpg","img3.jpg");
echo '<img src="ajax12/'.$img[$i%3].'" width="300">
<img src="ajax12/'.$img[($i+1)%3].'" width="300">
<img src="ajax12/'.$img[($i+2)%3].'" width="300">';
?>