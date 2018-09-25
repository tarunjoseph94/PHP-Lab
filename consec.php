<html>
<head>
	<title>Handout 3</title>
</head>
	<body>
		<form method="POST">
			<input type="text" name="date">
			<input type="submit">
		</form>	
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$date=$_POST['date'];
		
			$min=0;
			$sec=$date;
			while($sec>60)
			{
				$min++;
				$sec-=60;
			}
			$hour=0;
			while($min>60)
			{
				$hour++;
				$min-=60;
			}
			$day=0;
			while($hour>24)
			{
				$day++;
				$hour-=24;
			}
			$month=0;
			while($day>30)
			{
				$month++;
				$day-=30;
			}
			$year=0;

			while($month>12)
			{
				$year++;
				$month-=12;
			}
			echo "$year:$month:$day:$hour:$min:$sec <br>";
		}
		?>
	</body>
</html>