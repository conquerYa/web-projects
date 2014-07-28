<?php
require "connect.php";
$text = mysqli_real_escape_string($con, $_POST['text']);
if(isset($_POST['id'])){
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$sql = "UPDATE goals SET text='".$text."' WHERE id='".$id."';";
	if (!mysqli_query($con,$sql)) {
 		die('Error: ' . mysqli_error($con));
	}
}
else{
	$date = mysqli_real_escape_string($con, $_POST['date']);
	$result = mysqli_query($con,"SELECT * FROM days where date='".$date."';");
	$find=mysqli_num_rows($result); 
	if($find==0){
		$sql = "INSERT INTO days (date,text) VALUES ('$date', '$text')";
		if (!mysqli_query($con,$sql)) {
 			die('Error: ' . mysqli_error($con));
		}
	}else{
		$sql = "UPDATE days SET text='".$text."' WHERE date='".$date."';";
		if (!mysqli_query($con,$sql)) {
 			die('Error: ' . mysqli_error($con));
		}
	}
}
require "disconnect.php";
?>