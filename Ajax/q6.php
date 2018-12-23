<html>
    <head>
    </head>
    <body>
        <input type="text" onchange="checkText()" id="txt" />
        <div id="show">
        </div>
        <script>
        var i=0;
        function checkText()
        {
          var i=document.getElementById("txt").value;
       var xhttp=new XMLHttpRequest();
       xhttp.onreadystatechange=function()
			{
				if(this.readyState==4 && this.status==200)
				{

					document.getElementById("show").innerHTML=this.responseText;
				}
			};
       xhttp.open("GET","ajaxtext.php?text="+i,true);
       xhttp.send();

       }
        </script>
    </body>
</html>
