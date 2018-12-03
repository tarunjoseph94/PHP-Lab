<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
</head>
	<body>
		<p>Show for get</p>
		<input type="text" id="fname" name="fname">
		<input type="text" id="lname" name="lname">
		<button  onclick="getOpen()">Submit</button>
		<div id="show"></div>
		<p>Show for post</p>
		<input type="text" id="fnamep" name="fname">
		<input type="text" id="lnamep" name="lname">
		<button onclick="postOpen()">Submit</button>
		<div id="showp"></div>
		<script type="text/javascript">
		function getOpen(){
			var xhttp=new XMLHttpRequest();
		var lname=document.getElementById('lname').value;
		var fname=document.getElementById('fname').value;
			xhttp.onreadystatechange=function()
			{
				if(this.readyState==4 && this.status==200)
				{
					
					document.getElementById("show").innerHTML="Hello "+fname+" "+lname;
				}
			};
			xhttp.open("GET","ajaxhand1.2.php",true);
			xhttp.send();
		}
		function postOpen(){
			var xhttp=new XMLHttpRequest();
		var lname=document.getElementById('lnamep').value;
		var fname=document.getElementById('fnamep').value;
			xhttp.onreadystatechange=function()
			{
				if(this.readyState==4 && this.status==200)
				{
					
					document.getElementById("showp").innerHTML="Hello "+fname+" "+lname;
				}
			};
			xhttp.open("POST","ajaxhand1.2.php");
			xhttp.send();
		}
	</script>
	</body>
</html>