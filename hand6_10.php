<!DOCTYPE html>
<html>
<head>
	<title>handout 6</title>
</head>
	<body>
	<form method="POST">
		<input type="text" name="fname">
		<input type="submit">
	</form>
		<?php
		class fileNotFound extends Exception 
		{
	 		 public function errorMessage() 
	 		 {
	         $errorMsg = $this->getMessage();
	    	 return $errorMsg;
	  		 }
		}

		if(isset($_POST['fname']))
		{
			$fname=$_POST['fname'];
			try
			{
				
				if (!file_exists($fname))
				{
				//	echo "Not found";
					throw new fileNotFound("File does not exists");
					
				}
				else
				{
					// $count=0;
					// while(!feof($fp))
					// {
					// 	$ch=fgetc($fp);
					// 	if($ch=="\n")
					// 	{
					// 		$count++;
					// 	}
					// }
					// echo "The number of lines in $fname is $count";
					
					//OR

					$fp=fopen($fname,'r');
					$flength=file($fname);
					$count=count($flength);
					echo "The number of lines in $fname is $count";
				}

			}
			catch(fileNotFound $e)
			{
				echo $e->getMessage();
			}
		}

		?>
		
	</body>
</html>