<html>
<head>
<title>Notebook</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
<script type="text/javascript">
	$(document).ready(function() {
		var page = getURLParameter("page");	
		if(page=="goals"){			
			var id = getURLParameter("goal_id");
			$(".notepad").on('keyup change',function(){ 
				var text = $(".notepad").val();
				$.ajax({
                   		 		type:"post",
                   		 		url:"save_text.php",
			 		data:{id: id, text: text},
                      				 success:function(data){					                     		
                   		 		}
                 			});
			});	
			$('#right').click(function(){
				id++;	
				if(id<6){
					window.location.replace("index.php?page=goals&goal_id="+id);	
				}	
 			});
			$('#left').click(function(){ 
				id--;
				if(id>0){
					window.location.replace("index.php?page=goals&goal_id="+id);	
				}
 			});
		}else{
			var date = getURLParameter("day");
			$('#right').click(function(){
				window.location.replace("index.php?day="+getDay(date,1));		
 			});
			$('#left').click(function(){ 			
				window.location.replace("index.php?day="+getDay(date,-1));	
 			});
			$(".notepad").on('keyup change',function(){ 
				var text = $(".notepad").val();
				$.ajax({
                   		 		type:"post",
                   		 		url:"save_text.php",
			 		data:{date: date, text: text},
                      				success:function(data){
						var a = data;	                		
                   				 }
                 			});
			});
			
		}
	});	
	function getDay(d, t){
		var day;
		if(d!="0"){
			var dateParts = d.split(".");
			day = new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
			if(t==1){				
				day.setDate(day.getDate()+1);
			}
			else if(t==-1){
				day.setDate(day.getDate()-1);
			}	
		}else{
			day = new Date();
		}	
		var dd = day.getDate();
		var mm = day.getMonth()+1; //January is 0!
		var yy = day.getFullYear().toString().substr(2,2);
		if(dd<10) { dd='0'+dd;} 
		if(mm<10) { mm='0'+mm;} 
		day = dd+"." + mm + "." + yy;
		return day;	
	}
	function getURLParameter(name) {
  		return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
	}
</script>
<?php
	if(isset($_GET["page"])){
		$page = $_GET["page"];
		if($page=="goals"){
			if(isset($_GET["goal_id"])){
				$id = $_GET["goal_id"];
			}else{
				?><script>window.location.href = "index.php?page=goals&goal_id=1"</script><?php
			}
		}
	}else{
		if(isset($_GET["day"])){
			$day = $_GET["day"];
		}else{
			?><script>window.location.href = "index.php?day=" + getDay(0,0);</script><?php
		}
	}
	include "load_text.php";
?>
<div id=right>
<div class=arrow id=right_ar><img src=right.png width=50px height=50px></div>
</div>
<div id=left>
<div class=arrow id=left_ar><img src=left.png width=50px height=50px></div>
</div>
<div id=menu>
<div class=menu_item id=first_m><a href=index.php>Notebook</a></div>
<div class=menu_item><a href=index.php?page=goals>Goals</a></div>
</div>
<div id=center>
<div class=date><?php echo $day; ?></div>
<textarea class="notepad">
<?php echo $text; ?>
</textarea>
</div>
</body>
</html>