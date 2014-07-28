<?php include "connect.php";?>


<?php
$name = strtolower(trim(mysqli_real_escape_string($con,$_GET['search'])));
$result = mysqli_query($con,"SELECT * FROM winapi where LOWER(name)='".$name."';");
$c = mysqli_num_rows($result);
//echo "Найдено ".$c." совпадений<hr>";
if($c>0){
	include "description.php";
}else{
	echo "Найдено 0 совпадений<hr>";
}
?>
<?php include "disconnect.php";?>