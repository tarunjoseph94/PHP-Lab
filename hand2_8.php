<html>
<head>
	<title>Handout 2</title>
</head>
	<body>

        
		<?php
			$arrayName = array(81,45,66,48,97,17,18,12,53,25,96,85,82,14,75,57,63,52,60,48 );
			$array3=array(444);
			echo	min($arrayName)."<br>";
			echo	max($arrayName)."<br>";
			echo	array_unique($arrayName)."<br>";
			echo	"array_slice($arrayName,$array2)<br>";
			echo	"array_reverse($arrayName)<br>";
			echo	"array_merge($arrayName,$array3)<br>";

		
		?>
	</body>
</html>