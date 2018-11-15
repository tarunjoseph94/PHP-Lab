<!DOCTYPE html>
<html>
<head>
	<title>Handout 5</title>
</head>
<body>
<pre>
	<form method="POST">
		<p>Model number</p>
		<input type="text" name="mdl_num">
		<p>Model name</p>
		<input type="text" name="mdl_nme">
		<p>Model category</p>
		<input type="text" name="mdl_cat">
		<p>Model price</p>
		<input type="text" name="mdl_price">
		<p>Model mileage</p>
		<input type="text" name="mdl_mil">
		<input type="submit">
	</form>
	</pre>
	<?php
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$mdl_num=$_POST['mdl_num'];
		$mdl_nme=$_POST['mdl_nme'];
		$mdl_cat=$_POST['mdl_cat'];
		$mdl_price=$_POST['mdl_price'];
		$mdl_mil=$_POST['mdl_mil'];

		$hostname="localhost";
		$username="root";
		$pwd="";
		$dbname="automobile";
		$conn=mysqli_connect($hostname,$username,$pwd,$dbname);
		if(!$conn)
			{echo "Not conncted";}
		$qry="INSERT INTO car(model_number,model_name,category,price,mileage) VALUES ('$mdl_num','$mdl_nme','$mdl_cat','$mdl_price','$mdl_mil')";
		$sql=$conn->query($qry);
		if($sql)
		{
			echo "Inserted";
		}
		else
		{
			echo "problem";
		}
	}
	?>
</body>
</html>