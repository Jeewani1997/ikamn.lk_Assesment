<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	$Confirm_Password=$_POST['Confirm_Password'];
	if (empty($_POST['Name']) || empty($_POST['Email'])||empty($_POST['Password']) || empty($_POST['Confirm_Password'])) {
		# code...
		echo "Please Fill in the blanks";
	}elseif (($_POST['Password'])!=($_POST['Confirm_Password'])) {
		echo "Error password";
		# code...
	}else{
		echo "Signup correct";
	}



	?>

</body>
</html>