<?php include "login.php" ?>
<html>
<head>
<title>Справочник WinAPI функций</title>

<link rel="stylesheet" type="text/css" href="style.css">

<link rel="icon" type="image/png" href="img/icon.png">

<script src="my_js.js"></script>
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div id="header">	
	<?php		
	if(isset($_COOKIE['pass'])){
			echo "<div id='menu'>			
			<div class='menu_item' id='first_m'><a href='index.php?page=add'>Добавить функцию</a></div>
			<div class='menu_item'><a href='index.php?page=change_pass'>Изменить пароль</a></div>						
			<div class='menu_item'><a href='exit.php'>Выйти</a>	</div>	
			</div>";
		}
		else{
			echo "<div id='menu'>			
			<div class='menu_item' id='first_m'><a href='index.php?page=login'>Войти как администратор</a></div></div>";
		}
	?>
</div>	
<div id=left>
	
	<div id=logo>
		<a href=index.php><img src=/img/logo.png width=120px height=120px></a>
	</div>
	<div id="search_in">
		<form name=searchForm method="get" action="index.php" onsubmit="return validateSearch();">
  			<input name="search" type="text" placeholder="Поиск" id=search><input type="submit" value="Найти" >
		</form>
		<div id="search_advice_wrapper"></div>
	</div>
</div>	
<div id="center">
	<?php 
		if($_GET['page']=='add'){
			include "addform.php";
		}
		else if(isset($_GET['search'])){
			include "search.php";
		}
		else if($_GET['page']=='login'){
			include "login_form.html";	
		}
		else if($_GET['page']=='change_pass'){
			include "change_pass_form.php";
		}
		else if(isset($_GET['edit'])){
			$id=$_GET['edit'];
			include "edit.php";
			include "edit_form.php";
		}
		else{	
			include "showAPI.php";	
			if($_GET['ok']==1){
				?><script>alert("Пароль изменён");window.location.replace('index.php');</script><?php
				
			}
		}
	?>
</div>

</body>
</html>
