<!DOCTYPE html>
<html>
<head>
	<title>handout 6</title>
</head>
	<body>
		<?php
		if(!isset($_COOKIE['cur_date']))
		{
		setcookie('cur_date',date("h:i:sa"),time()+5);
		echo "Setting cookie";
		}
		else
		{
		echo $_COOKIE['cur_date'];
		}
		?>
		
	</body>
</html>