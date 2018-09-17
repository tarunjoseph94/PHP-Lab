<html>
<head>
	<title>Handout 2</title>
</head>
	<body>
		<form method="POST">

                    <p>Enter the Temperature</p>
                    <input type="text" id="temp" name="temp" >

                    <input type="Submit">
         </form>
        
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  
                  $temp=$_POST["temp"];
                  $kel=($temp+459.67)*5/9;
                  
			echo "$temp F = $kel K <br>";
			 	

		}
		?>
	</body>
</html>