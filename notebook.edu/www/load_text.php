<?php
require "connect.php";
if(isset($_POST['id'])){
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$result = mysqli_query($con,"SELECT * FROM goals where id ='".$id."';");
	$t =  "?|}!@#$~_";
}
else{
	$date = mysqli_real_escape_string($con, $_POST["date"]);
	$result = mysqli_query($con,"SELECT text FROM days where date ='".$date."';");
}
$row = mysqli_fetch_array($result);
echo $row["text"].$t.$row["period"];
require "disconnect.php";
?>