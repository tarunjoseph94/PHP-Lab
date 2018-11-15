

<?php
//Havent done anything, figure it out yourself
// attempt database connection
	$username = "root";
	$password = "";
	$hostname = "localhost";
	$database="tarun";

	$dbh = mysqli_connect($hostname, $username, $password,$database)or die("Unable to connect to MySQL");
if ($mysqli === false) {
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// attempt query execution
// add a new record
$sql = "INSERT INTO subjects (subject_code, subject_name) VALUES
('MCAE04', 'PHP')";
if ($mysqli->query($sql) === true) 
{
echo 'New record added.';
}
else
 {
echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
}
// close connection
$mysqli->close();
?>
