var desc = 0;
function validateForm() {
    	var x = document.forms["addForm"]["name"].value.trim();
   	 var reg = /^[a-zA-Z]+$/;
  	 if (!(reg.test(x))) {	
       		alert("������������ �����������");
		document.addForm.name.focus() ;
      		return false;
   	 }		
	return true;
}
function validateEditForm() {
    	var x = document.forms["editForm"]["name"].value.trim();
   	 var reg = /^[a-zA-Z]+$/;
  	 if (!(reg.test(x))) {	
       		alert("������������ �����������");
		document.editForm.name.focus() ;
      		return false;
   	 }		
	return true;
}

function showDescription(t) {
	var id = "id" + t;
	var a = "w" + t;
	if(desc!=id){
		document.getElementById(a).className = 'winapi_clicked';
		document.getElementById(id).style.display = 'block';
		desc = id;
	}
	else{
		document.getElementById(a).className = 'winapi';
		document.getElementById(id).style.display = 'none';
		desc = 0;
	}
}
function check(id){
	if (confirm('�� ������������� ������ �������?')) {
		window.location.replace('delete.php?id='+id);
	} else {
    		//do nothing
	}
}

function validate(f){ 	
 	if( document.passForm.oldPass.value.trim() == "" ){
   		alert( "������� �������������� ������ ��������������!" );
    		document.passForm.oldPass.focus() ;
     		return false;
   	}
  	if(document.passForm.newPass.value.trim() == "" ){
     		alert( "������� ����� ������ ��������������" );
    		document.passForm.newPass.focus() ;
     		return false;
     		
  	}      
    	if(document.passForm.newPassCheck.value.trim() == "" ){
     		alert( "������� ������������� ������ ������" );
     		document.passForm.newPassCheck.focus() ;
     		return false;
   	}
	if(document.passForm.newPassCheck.value.trim()!= document.passForm.newPass.value.trim()){
     		alert( "������ �� ���������" );
     		document.passForm.newPassCheck.focus() ;
     		return false;
   	}	
   	return( true );
}

function validateSearch(){
	if(document.searchForm.search.value.trim() == ""){
		alert( "���� ������ ������" );
    		document.searchForm.search.focus() ;
     		return false;
	}
	return true;
} 	
