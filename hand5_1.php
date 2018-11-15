<?php
$con=mysqli_connect("localhost","root","","tarun") ;
$q="select * from student";
//Procedural
//$res=mysqli_query($con,$q) ;

//Object oriented
$res=$con->query($q);
echo "<table>";
//Procedural
// while($ln=mysqli_fetch_array($res,MYSQLI_ASSOC))


//Object oriented

while($ln=$res->fetch_array(MYSQLI_ASSOC)){
	echo "<tr>";
	foreach ($ln as $col_value)
	{
		echo "<td>$col_value</td>";
			
	}
	echo "</tr>";
}

echo '</table>';

?>