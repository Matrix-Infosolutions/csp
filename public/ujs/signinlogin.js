$(document).ready(function() {
	docready();
});
function docready() {
	 $("#btnlogin").click(function() {
	 	logincheck();
 });
}
function logincheck(){
var mobno=$('#mobno').val();
var pswd=$('#pswd').val();
var mode=2;
if(mobno==0){mode=1;}
$.ajax({
type: "post",
url: "logincheck",
data: {mobno:mobno,pswd:pswd,},
beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#csrf-token").attr('content'));},
success: function (response) {
if (response==0){makealert("","Sign in succesfully ! WELCOME","success");location.href="/";}
else{makealert("","Login Problem , PLEASE CHECK YOUR CREDENTIALS","error");location.reload();}
}
});
}

