<html>
<head>
	<title>Switch</title>
</head>
	<body>
		<?php
		$color="Red";
		echo "<h2>If  </h2><br>";
		if($color=="Red")
		{

			echo "Red <br>";
		}
		
		$color="Red";
		echo "<h2>If..else  </h2><br>";
		if($color=="Blue")
		{
			echo "Blue <br>";
		}

		else
		{
			echo "Red <br>";
		}
		
		$color="Red";
		echo "<h2>elseIf  </h2><br>";
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
		$color="red";
		switch ($color) {
			case "red":
				echo "The color is red <br>"; 
				break;
			case "green":
				echo "The color is green <br>"; 
				break;
			case "blue":
				echo "The color is blue <br>"; 
				break;

			default:
			echo "Color not found <br>";
								break;
		}
		?>
	</body>
</html>