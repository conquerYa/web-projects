      <script type="text/javascript"> 
         $(document).ready(function(){
            $("#fname").on('keyup change',function(){           
 
            var fname=$.trim($("#fname").val());
 
              $.ajax({
                    type:"post",
                    url:"check_name.php",
                    data:"name="+fname,
                        success:function(data){
                        if(data==0){                            
		$("input[type=submit]").removeAttr("disabled");	
		 $("#warning").html("");	
                        }
                        else{
		 $("input[type=submit]").attr("disabled", "disabled");
		 $("#warning").html("������� "+fname+" ��� ���� � �����������:  <a href=index.php?search="+fname+">"+fname+"</a><br>����������, �������� 				������������");
                        }
                    }
                 });
 
            });
 
         });
 
       </script>
<div id="add_form">
	<form name=addForm method="post" action=add.php onsubmit="return validateForm();">
		<label>������������:</label> <input type="text" name="name" size=105 id=fname>*<br>
		<label>��������:</label> <textarea name="description" rows="4" cols="80"></textarea>
		<label>���������:</label> <textarea name="syntax" rows="4" cols="80"></textarea>				
		<label>��������� � �� ��������:</label> <textarea name="params" rows="4" cols="80"></textarea>
		<label>���������:</label> <textarea name="remark" rows="4" cols="80"></textarea>
		<label>����������, ����������:</label> <textarea name="requirements" rows="4" cols="80"></textarea><br>
		<input id="addbutton" type="submit" value="��������"><br><div id="warning" style="display:inline-block"></div>
	</form>
</div>
