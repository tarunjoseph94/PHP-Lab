<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
	<body>
		<form method="POST">
			<p>Enter the id </p>
			<input type="text" name="id">
			<p>Enter the name </p>
			<input type="text" name="name">
			<p>Enter the department </p>
			<input type="text" name="dept">
			<br>
			<input type="submit">
		</form>	
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$id=$_POST['id'];
			$name=$_POST['name'];
			$dept=$_POST['dept'];
			$fid="ID :".$id."\n";
			$fname="Name :".$name."\n";
			$fdept="Department :".$dept."\n";
			
			$file_ptr=fopen("test.txt",'w');
			fwrite($file_ptr, $fid);
			fwrite($file_ptr, $fname);
			fwrite($file_ptr, $fdept);
			fclose($file_ptr);


		}
		?>

	</body>
</html>