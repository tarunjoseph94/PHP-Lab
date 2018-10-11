<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
	<body>
		<form method="POST">
			<p>Enter the Number </p>
			<input type="text" name="num1">
			<p>Enter the Number </p>
			<input type="text" name="num2">
			<br>
			<input type="submit">
		</form>	
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$num1=$_POST['num1'];
			$num2=$_POST['num2'];
			
			$res=gcd($num1,$num2);
			echo "The GCD is $res";

			

		}
	
		function gcd($num1,$num2)
		{
			// echo "Test $num1 $num2 <br>";
			$min=$num1;
			if ($num2<$num1) {
				$min=$num2;
			}
			while ($min!=0) 
			{
				if($num1%$min==0 && $num2%$min==0)
				{
					return $min;
				}				
				$min--;
			}
			
		}
	
	?>

	</body>
</html>