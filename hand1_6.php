<html>
<head>
	<title>Handout 1</title>
</head>
	<body>
		<form name="armstrong" id="armstrong" method="POST">

                    <p>Enter a three digit number</p>
                    <input type="text" id="num" name="num" >
                    <input type="Submit">
         </form>
                    
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  
                  $num=$_POST["num"];
		
			$sum=0;
			$temp=$num;
			while($temp!=0)
			{
				$digit=$temp%10;
				$temp=$temp/10;
				$sum=$sum+$digit*$digit*$digit;
			}
			if($sum==$num)
			{
				echo "$num is an armstriong number";
			}
			else
			{
				echo "$num is not an armstrong number";
			}
		}
		?>
	</body>
</html>