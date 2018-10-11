<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
	<body>
		<form method="POST">
			<p>Enter the limit </p>
			<input type="text" name="num1">
			
			<br>
			<input type="submit">
		</form>	
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$num1=(int)$_POST['num1'];
			$a=0;
			echo "$a<br>";
			$b=1;
			//echo "$b<br>";
			$num1-=1;
			fibo($num1,$a,$b);
			
				
			

		}
	
		function fibo($num1,$a,$b)
		{
			if($num1 !=0) 
			{
					
					echo "$b<br>";				
					fibo($num1-1,$b,$a+$b);
			}

		}
	
	?>

	</body>
</html>
