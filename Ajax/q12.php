<html>
    <head>
    </head>
    <body>
        <div id="images">
            <img src="ajax12/img1.jpg" width="300">
            <img src="ajax12/img2.jpg" width="300">
            <img src="ajax12/img3.jpg" width="300">
        </div>
        <button onclick=changeImg()>Change Image</button>
        <script>
        var i=0;
        function changeImg()
        {
       var xhttp=new XMLHttpRequest();
       xhttp.onreadystatechange=function()
			{
				if(this.readyState==4 && this.status==200)
				{
					
					document.getElementById("images").innerHTML=this.responseText;
				}
			};
       xhttp.open("GET","ajaximage.php?count="+i,true);
       xhttp.send();
       i++;
       }
        </script>
    </body>
</html>