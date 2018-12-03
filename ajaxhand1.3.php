<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
</head>
	<body>
		<p>Get todays menu</p>
		<button onclick="loadXML()">Click Here</button>
		<table id="Menu"></table>
		<script type="text/javascript">
			function loadXML()
			{
				var xhttp=new XMLHttpRequest();
				xhttp.onreadystatechange=function()
				{
					if(this.readyState==4 && this.status==200)
					{
						retXML(this);
					}
				};
				xhttp.open('GET','lunch.xml',true);
				xhttp.send();
			}
			function retXML(xml)
			{
				
				var xmlDoc=xml.responseXML;
				//Tag names as as per the .xml File
				var tag=xmlDoc.getElementsByTagName('item');
				var tableinfo="<tr><th>Item Name</th><th>Item Price</th></tr>";
				for (var i = 0; i < tag.length; i++) {
					
					tableinfo +="<tr><td>"+tag[i].getElementsByTagName("item_name")[0].childNodes[0].nodeValue
					+"</td><td>"+tag[i].getElementsByTagName("item_price")[0].childNodes[0].nodeValue+"</td></tr>";
				}
				document.getElementById('Menu').innerHTML=tableinfo;
			}
		</script>
	</body>
</html>