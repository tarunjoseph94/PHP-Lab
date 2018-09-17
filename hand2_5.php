<html>
<head>
	<title>Handout 2</title>
</head>
	<body>

        
		<?php
			$arrayName = array(10,45,66,48,97,17,18,12,53,25,96,85,8,14,7 );
			foreach ($arrayName as $key ) {
			                	echo "$key <br>";
			                }                
			echo "Numbers Less Than 15 in the Array<br>";

			for($i=0;$i<sizeof($arrayName);$i++)
			{
					if($arrayName[$i]<15)
					{
					       	echo "$arrayName[$i] <br>";	
					}
			}

			 	

		
		?>
	</body>
</html>