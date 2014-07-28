<?php 
	if (isset($_COOKIE['pass'])){
	include "connect.php";	
	$name= trim(mysqli_real_escape_string($con, $_POST['name']));
	$result = mysqli_query($con,"SELECT * FROM winapi where name='".$name."';");
	$find = mysqli_num_rows($result);
	include "disconnect.php";
	echo $find;
	} 
?>