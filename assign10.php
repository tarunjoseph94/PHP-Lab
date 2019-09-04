<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<body>
		<form method="POST">
			<p>Enter the number of seconds</p>
			<input type="text" name="sec">
			<input type="submit">
		</form>	
		<?php 
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$sec=$min=$hour=0;
			$sec=$_POST['sec'];
			
			if($sec>60)
			{
			$min=intval($sec/60);
			$sec%=60;	
			}
			if($min>60)
			{
			$hour=intval($min/60);
			$min%=60;
			}
			echo "Hour :".$hour." Minute :".$min." Second: ".$sec;
			
		}
		?>
	</body>
</html>
