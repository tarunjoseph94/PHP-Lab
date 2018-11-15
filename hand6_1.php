<!DOCTYPE html>
<html>
<head>
	<title>handout 6</title>
</head>
	<body>
		<?php
		if(!isset($_COOKIE['Test']))
		{
		setcookie('Test','Test Coookie');
		echo "Setting cookie";
		}
		else
		{
		echo $_COOKIE['Test'];
		}
		?>
		
	</body>
</html>