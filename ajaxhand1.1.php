<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
</head>
	<body>

		<button onclick="fileopen()">Click me </button>
		<p id="fcontents"></p>
	</body>
	<script type="text/javascript">
	function fileopen() {
		var xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
		
			if(this.readyState==4 && this.status==200)
			{
				document.getElementById('fcontents').innerHTML=this.responseText;
			}
		};
		xhttp.open('GET','test.txt',true);
		xhttp.send();
	}
	
	</script>
</html>