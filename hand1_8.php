<html>
<head>
	<title>Handout 1</title>
</head>
	<body>
		<form method="POST">

                    <p>Enter the first number</p>
                    <input type="text" id="num1" name="num1" >
                    <p>Enter the second number</p>
                    <input type="text" id="num2" name="num2" >
                    <p>Enter the third number</p>
                    <input type="text" id="num3" name="num3" >
                    <input type="Submit">
         </form>
        
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  
                  $num1=$_POST["num1"];
                  $num2=$_POST["num2"];
                  $num3=$_POST["num3"];
                  $lg=$num1;
                  $sm=$num1;
		
			if($num2>$num1&&$num2>$num3)
			{
				$lg=$num2;
			}
			if($num3>$num1&&$num3>$num2)
			{
				$lg=$num3;
			}
			if($num2<$num1&&$num2<$num3)
			{
				$sm=$num2;
			}
			if($num3<$num1&&$num3<$num2)
			{
				$sm=$num3;
			}
			echo "The largest number is $lg <br>";
			echo "The smallest number is $sm <br>";

		}
		?>
	</body>
</html>