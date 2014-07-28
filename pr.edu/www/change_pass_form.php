<?php if (isset($_COOKIE['pass'])){?>
<div id=change_pass>
		<form name=passForm method="post" action="change_pass.php" onsubmit="return validate(this);">
  			<input type="password" size=30 name="oldPass" placeholder="Пароль администратора"><br>
			<input type="password" size=30 name="newPass"  placeholder="Новый пароль администратора" maxlength="30"><br>
			<input type="password" size=30 name="newPassCheck"  placeholder="Повторите новый пароль" maxlength="30"><br>
			<input type="submit" value="Изменить" >
		</form>
</div>
<?php if(isset($_GET['er'])){
	?><script>alert("Действительный пароль не правильный!")</script><?php }} ?>