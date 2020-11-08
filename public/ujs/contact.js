$( document ).ready(function() {
    docready();
});

function docready() {
 $("#btnsave").click(function() {
  savecontactus();
 });
 
}


function savecontactus(){
	if (isblank("uname")==false) {
	makealert("uname","Please enter a name",'warning');
	 return;}
	if (isblank("mobno")==false) {alert("Please enter a mobile no");issetfocus("mobono");return;}
	if (isblank("desc")==false) {alert("Please enter a description");issetfocus("desc");return;}
var cid=0;
var uname=$('#uname').val();
var mobno=$('#mobno').val();
 if(mobno!=""&&mobno!=undefined){
        var lent=mobno.length;
        if(lent!=10){alert("Please enter valid mobile no");issetfocus("mobno");return;}
 }
var desc=$('#desc').val();
var mode=2;
if(cid==0){mode=1;}
$.ajax({
type: "post",
url: "savecontactus",
data: {cid:cid,uname:uname,mobno:mobno,desc:desc,mode:mode},
success: function (response) {
alert("Record saved successfully");
}
});
}