<?
while($row = mysqli_fetch_array($result)) {
	echo "<div class = winapi id=w".$row['id']."><a href=# onclick='showDescription(".$row['id'].")'><b>".$row['name']."</b></a>";
	if (isset($_COOKIE['pass'])){
		echo "<div class=edit><a href=index.php?edit=".$row['id']."><img src=img/edit.png width=15px height=15px></a>
		<a href='#' onclick='check(".$row['id'].")'><img src=img/delete.png width=18px height=18px></a></div>";
	}
	echo "</div>";
  	echo "<div class=api_description id =id".$row['id'].">";
  	echo "".$row['description']."";  
	echo "<br>";
	echo "<br>";	
	echo "<b>���������</b>";
  	echo "<br>";
  	echo "<pre>".$row['syntax']."</pre>";
  	echo "<br>";
  	echo "<b>���������</b>";
  	echo "<br>";
	echo "<pre>".$row['params']."</pre>";
	echo "<br>";
	echo "<b>���������</b>";
  	echo "<br>";
	echo "<pre>".$row['remark']."</pre>";
	echo "<br>";
	echo "<b>����������, ����������� ����������</b>";
  	echo "<br>";
  	echo "<pre>".$row['requirements']."</pre>";
  	echo "<br>";
  	echo "</div><hr>";
}
?>