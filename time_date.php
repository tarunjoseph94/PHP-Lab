<html>
<head>
	<title>Time</title>
</head>
<body>
<?php
print time();
echo "<br>Now<br>".strtotime("now")."<br>";
echo "Tomorrow<br>".strtotime("tomorrow")."<br>";
echo "Yesterday<br>".strtotime("yesterday")."<br>";
echo "10 September 2000<br>".strtotime("10 September 2000")."<br>";

echo "Today is ".date("Y/m/d")."<br>";
echo "Today is ".date("Y.m.d")."<br>";
echo "Today is ".date("Y-m-d")."<br>";
echo "Today is ".date("l")."<br>";

echo "Today time is ".date("h:i:sa")."<br>";

$yesterday= new DateTime("yesterday");
echo $yesterday->format('Y.m.d');
echo "<br>";
$dayslater= new DateTime("+2 days");
echo $dayslater->format('Y.m.d');echo "<br>";
?>
</body>
</html>