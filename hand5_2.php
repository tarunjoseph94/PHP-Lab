<html>
<form  method="post"><center>
<HEAD> <CENTER><H1>INSERTING NEW RECORD TO BOOK DATABASE</H1></HEAD>
<pre>
Enter the Accession number:  <INPUT TYPE="text" NAME ="ACCNUM" ><BR>
Enter the Book title:        <INPUT TYPE="text" NAME ="TITLE" ><BR>
Enter the Author:            <INPUT TYPE="text" NAME ="AUTHOR" ><BR>
Enter the Edition:           <INPUT TYPE="text" NAME ="EDITION" ><BR>
Enter the Publisher:         <INPUT TYPE="text" NAME ="PUBLISHER" ><BR>
</pre>
<INPUT TYPE ="SUBMIT" VALUE ="INSERT NEW RECORD">   <INPUT TYPE ="RESET" VALUE ="CLEAR FIELDS">
</form>
<?
	$username = "root";
	$password = "";
	$hostname = "localhost";
	$database="tarun";

	$dbh = mysqli_connect($hostname, $username, $password,$database)or die("Unable to connect to MySQL");
	
	$a=$_POST['ACCNUM'];
	$t=$_POST['TITLE'];
	$au=$_POST['AUTHOR'];
	$e=$_POST['EDITION'];
	$p=$_POST['PUBLISHER'];
	if( ($a != "") && ($t != "") && ($au != "") && ($e != "") && ($p != "") ) 
	{
		$sql="INSERT INTO book_value(ACCNUM,TITLE,AUTHOR,EDITION,PUBLISHER) values ('$a','$t','$au','$e','$p')";
		//Procedural
	//	$result = mysqli_query($dbh,$sql ) ;	
		//Object Orieted
		$result=$dbh->query($sql);
        		//Procedural
        	//$result= mysqli_query($dbh,"Select * from book_value;");
      	//Object Orieted
		$result=$dbh->query("Select * from book_value;");
// print table headers
		$NumOfFields=$result->field_count;
		print " <table border=\"1\"> <tr> ";
		$i=0;
		$FieldName = $result->fetch_fields();
		foreach ($FieldName as $key ) {
		 print "<th>".$key->name."</th>";
			$i=$i+1; 	
			# code...
		}
		print "</tr>";
// print values
while ($row = $result->fetch_array(MYSQLI_NUM))
     		{
			$i=0;
			print "<tr>";
			while($i != $NumOfFields )
			{
				print "<td>".$row[$i]."</td>";
				$i=$i+1;
			}	
			print "</tr>";
		}
	}
	mysqli_close($dbh);

?>
</table> </body> </html>