<?php
if(isset($_POST['except']))
{
	$test=$_POST['except'];

switch ($test) {
	//case 1 will not work
	//Parse errors are strange like that
	case 1://trigger_error("Value must be 1 or below",E_PARSE);

		# code...
		break;

	case 2:echo $tnt;
	error_reporting(E_NOTICE);
		# code...
		break;
	case 3:$b=1/0;
	error_reporting(E_WARNING);
		# code...
		break;
	case 4:Asd();
		error_reporting(E_ERROR);
		# code...
		break;
	case 5:asd();
	error_reporting(E_ALL);

		# code...
		break;
	
	default:
	echo "How";
		# code...
		break;
	}
}
?> 
