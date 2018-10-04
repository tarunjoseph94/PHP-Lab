<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$arr=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") ;
$arr_key=array();

foreach ($arr as $key => $value) {

	echo " $key -> $value<br>";
	array_push($arr_key, $key);
	}
	echo "<br>Sorted array<br>";
	
	for($i=0;$i<sizeof($arr_key);$i++)
	{
		for ($j=$i+1; $j <sizeof($arr_key) ; $j++) { 
		if($arr[$arr_key[$i]]>$arr[$arr_key[$j]])
			{
				$temp=$arr[$arr_key[$i]];
				$arr[$arr_key[$i]]=$arr[$arr_key[$j]];
				$arr[$arr_key[$j]]=$temp;			
			}
		}
	}
	foreach ($arr as $key => $value) {

	echo " $key -> $value<br>";
	
	}	

?>
</body>
</html>