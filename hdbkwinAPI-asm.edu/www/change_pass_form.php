<?php if (isset($_COOKIE['pass'])){?>
<div id=change_pass>
		<form name=passForm method="post" action="change_pass.php" onsubmit="return validate(this);">
  			<input type="password" size=30 name="oldPass" placeholder="������ ��������������"><br>
			<input type="password" size=30 name="newPass"  placeholder="����� ������ ��������������" maxlength="30"><br>
			<input type="password" size=30 name="newPassCheck"  placeholder="��������� ����� ������" maxlength="30"><br>
			<input type="submit" value="��������" >
		</form>
</div>
<?php if(isset($_GET['er'])){
	?><script>alert("�������������� ������ �� ����������!")</script><?php }} ?>