<?php include "connect.php";?>


<?php
	if (isset($_COOKIE['pass'])){
		$id = mysqli_real_escape_string($con, $_GET['id']);
		mysqli_query($con,"DELETE FROM winapi WHERE id='".$id."'");
	}
?>
<?php	include "disconnect.php";?>


<script>window.location.replace('index.php');</script>
	