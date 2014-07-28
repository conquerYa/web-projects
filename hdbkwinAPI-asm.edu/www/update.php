<?php include "connect.php";?>


<?php		
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$syntax = mysqli_real_escape_string($con, $_POST['syntax']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$params = mysqli_real_escape_string($con, $_POST['params']);
	$requirements = mysqli_real_escape_string($con, $_POST['requirements']);
	$remark = mysqli_real_escape_string($con, $_POST['remark']);
	$sql = "UPDATE winapi SET name = '$name', syntax = '$syntax', description='$description', requirements='$requirements',params='$params',
	            remark='$remark' where id=".$id.";";
	if (!mysqli_query($con,$sql)) {
 		 die('Error: ' . mysqli_error($con));
	}
?>
<?php include "disconnect.php";?>


<script>window.location.replace('index.php');</script>