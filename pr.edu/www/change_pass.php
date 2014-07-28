<?php 	
	if (isset($_COOKIE['pass'])){
	include "connect.php";
	$new = trim(mysqli_real_escape_string($con, $_POST['newPass']));
	$result = mysqli_query($con,"SELECT * FROM pass where password='".$old."';");
	$c = mysqli_num_rows($result);
	if($c==0){	
		include "disconnect.php";	
		?><script>window.location.replace('index.php?page=change_pass&er=1');</script><?php
	}

	if (!mysqli_query($con,"UPDATE pass  SET password ='".$new."' WHERE password='".$old."';")){
		 die('Error: ' . mysqli_error($con));
	}
	include "disconnect.php";
	?>

<script>window.location.replace('index.php?ok=1');</script>
<?php } ?>