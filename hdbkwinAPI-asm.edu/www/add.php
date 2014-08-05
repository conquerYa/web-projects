<?php 
	if (isset($_COOKIE['pass'])){
	include "connect.php";?>


<?php
	$name = trim(mysqli_real_escape_string($con, $_POST['name']));
	$syntax = mysqli_real_escape_string($con, $_POST['syntax']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$params = mysqli_real_escape_string($con, $_POST['params']);
	$requirements = mysqli_real_escape_string($con, $_POST['requirements']);
	$remark = mysqli_real_escape_string($con, $_POST['remark']);
	$return= mysqli_real_escape_string($con, $_POST['return']);
	$result = mysqli_query($con,"SELECT * FROM winapi where name='".$name."';");
	$find=mysqli_num_rows($result); 
	if($find==0){
	$sql = "INSERT INTO winapi (name, syntax, description, requirements,params,remark,returnv) VALUES ('$name', 		'$syntax','$description','$requirements','$params','$remark','$return')";
	if (!mysqli_query($con,$sql)) {
 		die('Error: ' . mysqli_error($con));
	}
	}else{
		include "disconnect.php";
		?>

<script>window.history.back();</script><?php
	}
	?>
<?php	include "disconnect.php";?>


<script>window.location.replace('index.php');</script>
<?php 	} ?>
	