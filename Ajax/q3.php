<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <div id="show">
            <p id="random">This is text</p>
        </div>
        <button onclick="changeColor()">Change color</button>
            <script type="text/javascript">
            var i=0;
            function changeColor()
            {
            var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange=function()
			{
				if(this.readyState==4 && this.status==200)
				{
					
					document.getElementById("show").innerHTML=this.responseText;
				}
			};
            xhttp.open("GET", "ajaxcolor.php?num="+i, true);
            xhttp.send();
            i++;
            
            }
            </script>    
    </body>
</html>
