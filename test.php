
<html>
    <head>
                      <script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>
        <div id="show">

        </div>
        <?php
        $dir = "js/";

        // Open a directory, and read its contents
        if (is_dir($dir)){
          if ($dh = opendir($dir)){
            $i=0;
            while (($file = readdir($dh)) !== false){
              $jsFileName[$i]=$file;
              $i++;
            }
            closedir($dh);
          }
        }
        ?>
            <script type="text/javascript">


            var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange=function()
			{
				if(this.readyState==4 && this.status==200)
				{

					document.getElementById("show").innerHTML=this.responseText;
				}
			};
            xhttp.open("GET", "signup.php", true);
            xhttp.send();
            $(document).ready(function () {
            <?php for($i = 2; $i < count($jsFileName); $i++)
            {
              ?>
              $.getScript( <?php echo "'js/$jsFileName[$i]'"; ?> );
            <?php  } ?>
            });
                </script>

    </body>
</html>
