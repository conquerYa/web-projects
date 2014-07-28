<?php include "connect.php";?>


<?php
$result = mysqli_query($con,"SELECT * FROM winapi order by name");
?>
<?php include "description.php";?>
<?php include "disconnect.php";?>