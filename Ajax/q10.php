<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
</head>
	<body>
		<p>Enter two numbers</p>
		<input type="text" id="num1">
		<input type="text" id="num2" >
		<button  onclick="getProduct()">Submit</button>
		<div id="show"></div>
		<script type="text/javascript">
		function getProduct(){
		var xhttp=new XMLHttpRequest();
		var numx=document.getElementById('num1').value;
		var numy=document.getElementById('num2').value;
			xhttp.onreadystatechange=function()
			{
				if(this.readyState==4 && this.status==200)
				{
					
					document.getElementById('show').innerHTML=this.responseText;
				}
			};
			xhttp.open("GET","ajaxnum.php?number1="+numx+"&number2="+numy,true);
			xhttp.send();
		}
	</script>
	</body>
</html>