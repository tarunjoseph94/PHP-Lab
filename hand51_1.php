<!DOCTYPE html>
<html>
<head>
	<title>handout 5</title>
</head>
	<body>
		<?php
		$hostname="localhost";
		$user="root";
		$pwd="";
		$dbname="automobile";
		$conn=mysqli_connect($hostname,$user,$pwd,$dbname);
		if(!$conn)
		{
			echo "Not Connected";
		}
		$qry="Select * from car";
		$sql=$conn->query($qry);
		while($row=$sql->fetch_array(MYSQLI_ASSOC))
		{
			?>
			<table>
			<tr>	
			<?php
			foreach ($row as $key) {
				echo "<td>$key</td>";
			}
			echo "</tr>";
		}
		?>
			</table>
			
			<p>More tha 20 mileage</p>
			<?php
		$qry="SELECT * FROM car WHERE mileage >=20";
		$sql=$conn->query($qry);
		while($row=$sql->fetch_array(MYSQLI_ASSOC))
		{
			?>
			<table>
			<tr>	
			<?php
			foreach ($row as $key) {
				echo "<td>$key</td>";
			}
			echo "</tr>";
		}
		?>
			</table>
			<p>less than 8 lakh mileage</p>
			<?php
		$qry="SELECT * FROM car WHERE price <=800000";
		$sql=$conn->query($qry);
		while($row=$sql->fetch_array(MYSQLI_ASSOC))
		{
			?>
			<table>
			<tr>	
			<?php
			foreach ($row as $key) {
				echo "<td>$key</td>";
			}
			echo "</tr>";
		}
		?>
			</table>
	</body>
</html>