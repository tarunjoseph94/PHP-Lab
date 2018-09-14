<html>
<head>
	<title>Handout 1</title>
</head>
	<body>
	<form name="year" id="year" method="POST">

                    <p>Enter the year</p>
                    <input type="text" id="num" name="num" >
                    <input type="Submit">
         </form>
        
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  
                  $num=$_POST["num"];
		
			if($num%4==0)
			{
				echo "$num is a leap year ";
			}
			else
			{
				echo "$num is not leap year";
			}
		}
		?>
	</body>
</html>