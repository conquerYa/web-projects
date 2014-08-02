<div id="add_form">
	<form name=editForm method="post" action="update.php" onsubmit="return validateForm()">
		<label>Наименование:</label> <input type="text" name="name" size=105 value="<?php echo $name?>"><br>
		<label>Описание:</label> <textarea name="description" rows="4" cols="80"><?php echo $description?></textarea>
		<label>Синтаксис:</label> <textarea name="syntax" rows="4" cols="80"><?php echo $syntax?></textarea>				
		<label>Параметры и их описание:</label> <textarea name="params" rows="4" cols="80"><?php echo $params?></textarea>
		<label>Замечания:</label> <textarea name="remark" rows="4" cols="80"><?php echo $remark?></textarea>
		<label>Требования, библиотеки:</label> <textarea name="requirements" rows="4" cols="80"><?php echo $requirements?></textarea><br>
		<input type="hidden" name = "id" value="<?php echo $id?>">
		<input id="addbutton" type="submit" value="Изменить">
	</form>
</div>