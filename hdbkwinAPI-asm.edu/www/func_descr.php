<?php include "connect.php";?>


<?php
	$result = mysqli_query($con,"SELECT * FROM winapi where id=".$f_id);
?>
<?php include "description.php";?>
<?php include "disconnect.php";?>