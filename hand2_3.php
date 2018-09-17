<html>
<head>
	<title>Handout 2</title>
</head>
	<body>
		<form method="POST">

                    <p>Enter the Text Box</p>
                    <input type="text" id="txtbx1" name="txtbx1" >
                    <p>Enter the Text Area</p>
                    <textarea id="txtarea" name="txtarea"></textarea>
                    <p>Enter the hidden textbox</p>
                    <p>Hidden text value by default is "Hidden Text" </p>
                    <input type="hidden" id="hid" name="hid" value="Hiden text">
                    <p>Enter the Password</p>
                    <input type="password" id="pwd" name="pwd">
                    <p>Enter the Selection List</p>
                    <select id="slt" name="slt">
                    	<option value="1">1</option>
                    	<option value="2">2</option>
                    	<option value="3">3</option>
                    	<option value="4">4</option>
                    </select>
                    <p>Radio Buttons</p>
                    <input type="radio" name="rdbtn" value="Radio 1">
                    <input type="radio" name="rdbtn" value="Radio 2">
                    <p>CheckBoxes </p>
                    <input type="Checkbox" name="ckbtn[]" value="Checkbox 1">CheckBox 1
                    <input type="Checkbox" name="ckbtn[]" value="Checkbox 2">CheckBox 2
                    <input type="Checkbox" name="ckbtn[]" value="Checkbox 3">CheckBox 3
                    <br>
                    <input type="Submit">
         </form>
        
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  
                $txt=$_POST['txtbx1'];
                $txtarea=$_POST['txtarea'];
                $hid=$_POST['hid'];
                $pwd=$_POST['pwd'];
                $slt=$_POST['slt'];
                $rdbtn=$_POST['rdbtn'];

                echo "Text box is $txt <br>";
                echo "Text area is $txtarea<br>";
                echo "Text hidden is $hid<br>";
                echo "Text password is $pwd<br>";
                echo "Selection List is $slt<br>";
                echo "Radio Button is $rdbtn<br>";
                foreach ($_POST['ckbtn'] as $key ) {
                
                echo "CheckBox  is $key<br>";
                }
                

			 	

		}
		?>
	</body>
</html>