<html>
<head>
	<title>Handout 3</title>
</head>
	<body>
		<form method="POST">
			<p>Enter Age in dd/mm/yyyy</p>
			<input type="text" name="date">
			
			<input type="submit">
		</form>	
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$date=$_POST['date'];
		
			$dateobj=date_create_from_format('d/m/Y',$date);
			$dateformat=$dateobj->format('Y/m/d');
			$datetest=new DateTime($dateformat);
			
			$now= new DateTime("now");
						
			$res=$now->diff($datetest);
			echo $res->format("%y years %m months %d days");
		}
		?>
	</body>
</html>