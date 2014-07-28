<?php
setcookie("pass","",time()-36000);
header("Location: index.php");
exit;
?>