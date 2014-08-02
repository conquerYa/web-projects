<?php
require "connect.php";
if(isset($id)){
	$result = mysqli_query($con,"SELECT * FROM goals where id ='".$id."';");
}
else{
	$result = mysqli_query($con,"SELECT text FROM days where date ='".$day."';");
}
$row = mysqli_fetch_array($result);
$text =  $row["text"];
if(!isset($day)) $day = "Goals for ".$row["period"];
require "disconnect.php";
?>
