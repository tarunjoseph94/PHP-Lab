<html>
<head>
	<title>Handout 2</title>
</head>
	<body>

        
		<?php
			$arrayName = array(81,45,66,48,97,17,18,12,53,25,96,85,82,14,75,57,63,52,60,48 );
			$min=0;
			$max=0;
			$avg=0;


			for($i=0;$i<sizeof($arrayName);$i++)
			{
				$avg=$avg+$arrayName[$i];
					if($arrayName[$i]<20)
					{
					       	$min++;
					}
					if($arrayName[$i]>80)
					{
					       	$max++;
					}

			}
			$avg=$avg/sizeof($arrayName);
			echo "Average Marks of the class is $avg<br>";
			echo "Students who scored less  than 20 in the class is $min<br>";
			echo "Students who scored more than 80 in the class is $max<br>";
			 	

		
		?>
	</body>
</html>