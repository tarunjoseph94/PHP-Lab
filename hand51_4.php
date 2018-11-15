<?php
$b = array(
"Fruits" => "Banana",
"Flowers" => "Rose",
"Vegetables" => "Carrot"
);
try
 {
   $iterator = new ArrayIterator($b); 
   $iterator->seek(10);
  }
catch (Exception $e)
 {
echo "ERROR: Something went wrong!";
echo "Error message: " . $e->getMessage() ;
echo "Error code: " . $e->getCode() ;
echo "File name: " . $e->getFile() ;
echo "Line: " . $e->getLine() ;
 }
 ?>