<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
	<body>
		<form method="POST">
			<p>Enter the file name </p>
			<input type="text" name="fname">
			
			<br>
			<input type="submit">
		</form>	
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$fname=$_POST['fname'];
			$file_ptr=fopen($fname,'r');
			while (!feof($file_ptr)) 
			{
				$a=fgetc($file_ptr);	
				echo $a;	
			}
			fclose($file_ptr);		
			

		}

	
	?>

	</body>
</html>