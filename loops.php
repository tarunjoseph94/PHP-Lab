<html>
<head>
	<title>Hello</title>
</head>
	<body>
		<?php
		$a=1;
		echo "<h2>While loop <br></h2>";
		while($a<5)
		{
			echo $a."<br>";
			++$a;
		}
		$a=1;
		echo "<h2>Do While loop <br></h2>";
		do
		{
			echo $a."<br>";
			++$a;
		}while($a<5);
		echo "<h2>For loop <br></h2>";
		for($a=1;$a<5;$a++)
		{
			echo $a."<br>";
		}

		$a = array("1","2","3","4");
		
		echo "<h2>Foreach loop <br></h2>";
		foreach ($a as $key ) {
		echo $key."<br>";
		}

		?>
	</body>
</html>