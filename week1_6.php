<!DOCTYPE html>
<html>
<head>
	<title>6</title>
</head>
	<body>
		<?php
		$var1="Hello";
		echo $var1."<br>";
		unset($var1);
		echo "Return error beacuse var1 has been destoyed <br>";
		echo $var1;
		?>
	</body>
</html>