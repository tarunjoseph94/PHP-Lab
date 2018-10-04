<!DOCTYPE html>
<html>
<head>
	<title>Handout 3</title>
</head>
<body>
<?php
$str1="This is a large string";
$str3="small";
echo "<br> String length is ".strlen($str1)."<br>";
echo "<br> No of words in string is ".str_word_count($str1)."<br>";
echo "<br> a is found at postion ".strpos($str1,"a")."<br>";
$str4=str_replace("large", $str3, $str1);
echo "<br>$str4<br>";
echo "<br>".ucwords($str1)."<br>";
echo "<br>".strtoupper($str1)."<br>";
echo "<br>".strtolower($str1)."<br>";
echo "<br>".strtolower($str1)."<br>";
echo "<br>".str_repeat($str1,3)."<br>";
echo "<br>".strcmp($str1,$str4)."<br>";
echo "<br>".substr($str1,4)."<br>";


?>
</body>
</html>