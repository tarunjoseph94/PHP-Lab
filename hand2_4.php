<html>
<head>
	<title>Handout 2</title>
</head>
	<body>

        
		<?php
			$arrayName = array(1,5,6,4,9,7,8,2,3 );
			foreach ($arrayName as $key ) {
			                	echo "$key <br>";
			                }                
			echo "Sorted Array<br>";

			for($i=0;$i<sizeof($arrayName);$i++)
			{
				for($j=$i+1;$j<sizeof($arrayName);$j++)
				{
					if($arrayName[$j]<$arrayName[$i])
					{
						$temp=$arrayName[$i];
						$arrayName[$i]=$arrayName[$j];
						$arrayName[$j]=$temp;		
					}
				}
			}
				foreach ($arrayName as $key ) {
			                	echo "$key <br>";
			                }                

			 	

		
		?>
	</body>
</html>