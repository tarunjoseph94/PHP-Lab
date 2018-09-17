<html>
<head>
	<title>Handout 2</title>
</head>
	<body>
		<form method="POST">

                    <p>Enter Your name</p>
                    <input type="text" id="nam" name="nam" >
                    <p>Enter Your USN</p>
                    <input type="text" id="usn" name="usn" >
                    <input type="Submit">
         </form>
        
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  
                  $nam=$_POST["nam"];
                  $usn=$_POST["usn"];
                  
			echo "Your Name is  is $nam <br>";
			echo "Your USN  is $usn <br>";

		}
		?>
	</body>
</html>