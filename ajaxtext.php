<?php
  $formtext=$_REQUEST['text'];
  $fp=fopen('names.txt','r');
  while(!feof($fp))
  {
    $texttext=fgets($fp);
    if(strpos($texttext,$formtext)!==false)
    {
      echo "$texttext";
    }
    $texttext='';
  }
 ?>
