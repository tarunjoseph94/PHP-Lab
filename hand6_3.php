<!DOCTYPE html>
<html>
<head>
	<title>handout 6</title>
</head>
	<body>
		<?php
		//session_save_path("/opt/lampp/htdocs/lab/Ses");
			session_start();
		if(!isset($_SESSION['page_count']))
		{
		$_SESSION['page_count']=1;
		
		}
		else
		{
		$_SESSION['page_count']+=1;
		}
		echo $_SESSION['page_count'];
		?>
		
	</body>
</html>