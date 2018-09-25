<html>
<head>
	<title>Handout 3</title>
</head>
	<body>
		<?php
	$res=time("-7");
				$min=0;
			$sec=$res;
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
			echo "<br>$year years $month months $day days $hour hours $minu <br>";

		?>
	</body>
</html>