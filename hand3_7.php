<!DOCTYPE html>
<html>
<head>
	<title>Handout 3</title>
</head>
<body>
	<?php
		$arr=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") ;
		echo "Array <br>";
		foreach ($arr as $key => $value) {
			echo "$key =>$value <br>";
		}
		echo "<br>Sorted Array in Ascending order according to value <br>";	
		asort($arr);
		foreach ($arr as $key => $value) {
			echo "$key =>$value <br>";
		}
		echo "<br>Sorted Array in Descending order according to value<br>";	
		arsort($arr);
		foreach ($arr as $key => $value) {
			echo "$key =>$value <br>";
		}
		echo "<br>Sorted Array in Ascending order according to key <br>";
		ksort($arr);
		foreach ($arr as $key => $value) {
			echo "$key =>$value <br>";
		}
		echo "<br>Sorted Array in Descending order according to key<br>";	
		krsort($arr);
		foreach ($arr as $key => $value) {
			echo "$key =>$value <br>";
		}

			?>
</body>
</html>