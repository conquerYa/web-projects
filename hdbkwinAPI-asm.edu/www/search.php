<?php include "connect.php";?>


<?php
$name = strtolower(trim(mysqli_real_escape_string($con,$_GET['search'])));
$result = mysqli_query($con,"SELECT * FROM winapi where LOWER(name)='".$name."';");
$c = mysqli_num_rows($result);
if($c>0){
	include "description.php";
}else{	
	echo "Найдено ".$c." совпадений: ".$name."<hr>";
}
?>
<?php include "disconnect.php";?>