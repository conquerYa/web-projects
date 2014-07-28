<?php
	if (isset($_COOKIE['pass'])){
	 include "connect.php";?>
<?php
	$result = mysqli_query($con,"SELECT * FROM winapi where id=".$id);
	if (!$result) {
   	 	printf("Error: %s\n", mysqli_error($con));
   		exit();
	}
	$row = mysqli_fetch_array($result);			
	$name = $row['name'];
	$description = $row['description'];
	$syntax = $row['syntax'];
	$params = $row['params'];
	$remark = $row['remark'];
	$requirements = $row['requirements'];
?>
<?php include "disconnect.php";}?>

