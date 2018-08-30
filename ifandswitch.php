<html>
<head>
	<title>Switch</title>
</head>
	<body>
		<?php
		
		echo "<h2>If  </h2><br>";
		$color="Red";
		if($color=="Red")
		{

			echo "Red <br>";
		}
		
		echo "<h2>If..else  </h2><br>";
		$color="Red";
		if($color=="Blue")
		{
			echo "Blue <br>";
		}

		else
		{
			echo "Red <br>";
		}
		
		echo "<h2>elseIf  </h2><br>";
		$color="Red";
		if($color=="Blue")
		{
			echo "Blue <br>";
		}
		elseif($color=="Green")
		{
			echo "Green <br>";

		}
		else
		{
			echo "Red <br>";
		}


		echo "<h2>switch  </h2><br>";
		$color="Blue";
		switch ($color) {
			case "red":
			//WHAT IS BETWEEN THE " " ie red IS CASE SENSITIVE BE CAREFUL
				echo "The color is red <br>"; 
				break;
			case "Green":
			//WHAT IS BETWEEN THE " " ie green IS CASE SENSITIVE BE CAREFUL
				echo "The color is green <br>"; 
				break;
			case "Blue":
			//WHAT IS BETWEEN THE " " ie blue IS CASE SENSITIVE BE CAREFUL
				echo "The color is blue <br>"; 
				break;

			default:
			echo "Color not found <br>";
								break;
		}

		?>
	</body>
</html>