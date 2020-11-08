$(document).ready(function() {
	docready();
});
function docready() {
	 $("#btnsave").click(function() {
	 	save_signup();
 });
}

function save_signup() {
 	if (isblank("name")==false) {makealert("name","Please select valid UserName",'warning');return;}
	if (isblank("mobno")==false) {makealert("mobno","Please input your Phone Number",'warning');return;}
	if (isblank("pswd")==false) {makealert("pswd","Please create your password",'warning');;return;}
	if (isblank("cpwd")==false) {makealert("cpwd","Please confirm your password",'warning');return;}
var lid=0;
var name=$('#name').val();
var role="user";
var pswd=$('#pswd').val();
var cpwd=$('#cpwd').val();
if(cpwd!=pswd){
        makealert("cpwd","Password not match ! re-enter password",'warning');return;
    }
var edate=getcurrentdate();
var islive=0; 
var mobno=$('#mobno').val();
 if(mobno!=""&&mobno!=undefined){
        var lent=mobno.length;
        if(lent!=10){makealert("mobno","Please enter valid mobile no",'warning');return;}
    }
var mode=2;
if(lid==0){mode=1;}
$.ajax({
type: "post",
url: "savesignup",
data: {lid:lid,name:name,role:role,pswd:pswd,edate:edate,islive:islive,mobno:mobno,mode:mode,},
beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#csrf-token").attr('content'));},
success: function (response) {
if (response > 0) {
    makealert("","Register successfully ! WELCOME",'success');
    location.Reload();
    }else if (response == "-2") {alert("User already exist.");}
    else {
    makealert("",'Please try again!',"error");}
}
});
}