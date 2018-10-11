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

		function __construct($s)
		{
			$this->size=$s;
			
		}

		function calArea()
		{

			return $this->size*$this->size;
		}
	}
	?>
		<form method="POST">
			<p>Enter the size </p>
			<input type="text" name="size">
			<br>
			<input type="submit">
		</form>	
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$s=$_POST['size'];
			
			$sqaure1=new box($s);
			$area=$sqaure1->calArea();
			echo "The area is $area";

			

		}
		?>

	</body>
</html>