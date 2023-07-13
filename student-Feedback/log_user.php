<?php
include_once "connect.php";		
		$ins = "INSERT INTO login_user 
	 VALUES ('".$_POST['r']."')";
	 if (mysqli_query($conn, $ins)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $ins . "
" . mysqli_error($conn);
	 }
				?>