<html>
  <head>

  </head>
  <body>
    <form method="post">
      <p>
        Enter the first number
      </p>
      <input type="text" name="inp1" />
      <p>
        Enter the second number
      </p>
      <input type="text" name="inp2" />
      <p>
        Enter the third number
      </p>
      <input type="text" name="inp3" />
      <p>
        Enter the fourth number
      </p>
      <input type="text" name="inp4" />
      <p>
        Enter the fifth number
      </p>
      <input type="text" name="inp5" />
      <p>
        Enter the sixth number
      </p>
      <input type="text" name="inp6" />
      <p>
        Enter the seventh number
      </p>
      <input type="text" name="inp7" />
      <p>
        Enter the eighth number
      </p>
      <input type="text" name="inp8" />
      <p>
        Enter the nineth number
      </p>
      <input type="text" name="inp9" />
      <p>
        Enter the tenth number
      </p>
      <input type="text" name="inp10" />
      <input type="submit" />
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $in1=$_POST['inp1'];
      $in2=$_POST['inp2'];
      $in3=$_POST['inp3'];
      $in4=$_POST['inp4'];
      $in5=$_POST['inp5'];
      $in6=$_POST['inp6'];
      $in7=$_POST['inp7'];
      $in8=$_POST['inp8'];
      $in9=$_POST['inp9'];
      $in10=$_POST['inp10'];
      $mean=($in1+$in2+$in3+$in4+$in5+$in6+$in7+$in8+$in9+$in10)/10;
      $var1=$in1-$mean;
      $var2=$in2-$mean;
      $var3=$in3-$mean;
      $var4=$in4-$mean;
      $var5=$in5-$mean;
      $var6=$in6-$mean;
      $var7=$in7-$mean;
      $var8=$in8-$mean;
      $var9=$in9-$mean;
      $var10=$in10-$mean;
      $meanvar=(($var1*$var1)+($var2*$var2)+($var3*$var3)+($var4*$var4)+($var5*$var5)+($var6*$var6)+($var7*$var7)+($var8*$var8)+($var9*$var9)+($var10*$var10)/10);
      $stddev=sqrt($meanvar);
      echo "The mean variance is $meanvar <br/>";
      echo "The standard devation is $stddev <br/>";

    }
    ?>
  </body>
</html>
