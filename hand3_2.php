<html>
<head>
	<title>Handout 3</title>
</head>
	<body>
		<form method="post">
			<input type="text" name="txt">
			<input type="submit">
		</form>
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$date=$_POST['txt'];
			$dateobj = date_create_from_format('d/m/Y', $date);
			echo date_format($dateobj,'d M Y');
		}
		?>
	</body>
</html>