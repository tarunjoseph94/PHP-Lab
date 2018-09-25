<html>
<head>
	<title>Handout 3</title>
</head>
	<body>
		<form method="POST">
			<p>Enter the First date in dd/mm/yyyy</p>
			<input type="text" name="date1">
			<p>Enter the second date in dd/mm/yyyy</p>
			<input type="text" name="date2">
			<input type="submit">
		</form>	
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$date1=$_POST['date1'];
			$dateobj1=date_create_from_format('d/m/Y',$date1);
			$dateformat1=$dateobj1->format('Y/m/d');
			$datetest1=new DateTime($dateformat1);

			$date2=$_POST['date2'];
			$dateobj2=date_create_from_format('d/m/Y',$date2);
			$dateformat2=$dateobj2->format('Y/m/d');
			$datetest2=new DateTime($dateformat2);
			
						

			$res=$datetest1->diff($datetest2);

			echo $res->format("%d days %m months %y years");
			//OR with this method
			$res=strtotime($date2)-strtotime($date1);
			echo "<br>$res<br>";
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
			echo "<br>$year years $month months $day days <br>";


		}
		?>
	</body>
</html>