<?
while($row = mysqli_fetch_array($result)) {
	echo "<div class = winapi><a href=index.php?func_id=".$row['id']."><b>".$row['name']."</b></a>";
	if (isset($_COOKIE['pass'])){
		echo "<div class=edit><a href=index.php?edit=".$row['id']."><img src=img/edit.png width=15px height=15px></a>
		<a href='#' onclick='check(".$row['id'].")'><img src=img/delete.png width=18px height=18px></a></div>";
	}	
	echo "<hr>";	
	echo "</div>";
}
?>