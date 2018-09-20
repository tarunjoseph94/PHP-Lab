<html>
<head>
	<title>Handout 3</title>
</head>
	<body>
		<form method="POST">
			<p>Enter the date</p>
			<input type="text" name="date">
			<p>Enter the month</p>
			<input type="text" name="month">
			<p>Enter the year</p>
			<input type="text" name="year">
			<input type="submit">
		</form>
	</body>
		<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$date=$_POST['date'];
			$month=$_POST['month'];
			$year=$_POST['year'];
			if(checkdate($month,$date,$year))
			{
				echo "This date is valid <br>";
			}
			else
			{
				echo "This date is  not valid <br>";
			}
		}
		?>
</html>