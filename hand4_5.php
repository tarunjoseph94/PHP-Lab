<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
	<body>
	<?php
	class box
	{

		//public $size;



		function calArea($len,$bre)
		{

			return $len*$bre;
		}
		function calPeri($len,$bre)
		{

			return (2*$len)*(2*$bre);
		}
	}
	?>
		<form method="POST">
			<p>Enter the length </p>
			<input type="text" name="length">
			<p>Enter the breadth </p>
			<input type="text" name="breadth">
			<br>
			<input type="submit">
		</form>	
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$l=$_POST['length'];
			$b=$_POST['breadth'];
			
			$rect=new box();
			$area=$rect->calArea($l,$b);
			echo "The area is $area<br>";
			$peri=$rect->calPeri($l,$b);
			echo "The Perimeter is $peri";


			

		}
		?>

	</body>
</html>