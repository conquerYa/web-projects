<?php	
	if(isset($_POST['password'])){
 	include "connect.php";
	$pass = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con,"SELECT * FROM pass where password='".$pass."'");
	if(mysqli_num_rows($result)!=0){
		$pass = md5(md5($pass));	
		setcookie("pass",$pass,time()+36000);		
		header("Location: index.php");
	}else{	
		?><script>alert("ѕароль введЄн не верно");window.location.replace('index.php?page=login');</script><?php		
	}
	include "disconnect.php";
	}
?>