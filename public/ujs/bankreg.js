
$(document).ready(function() {
	docready();
});

function docready() {
$("#edate" ).datepicker({ dateFormat: "dd/mm/yy",maxDate: 0,onSelect: function (){this.focus();}});
$('#edate').datepicker('setDate', new Date());
 $("#btnsave").click(function() {
  save_bankreg();
 });

    searchbank();
 

}

function save_bankreg() {
 	if (isblank("name")==false) {makealert('name',"Please select valid Name",'warning');return;}
	if (isblank("mobno")==false) {makealert('mobno',"Please input your Phone Number",'warning');return;}
    if (isblank("refcode")==false) {makealert('refcode',"Please input Ref Code",'warning');return;}
    if (isblank("cifno")==false) {makealert('cifno',"Please input CIF No",'warning');return;}
    if (isblank("acno")==false) {makealert('acno',"Please select valid AC/NO",'warning');return;}
	var bnkid=$("#bnkid").val();
	var edate=$("#edate").val();
    edate=getJqueryDateTime_PassDt(edate,"ymd");
	var name=$("#name").val();
	var mobno=$("#mobno").val();
    if(mobno!=""&&mobno!=undefined){
        var lent=mobno.length;
        if(lent!=10){makealert('mobno',"Please enter valid mobile no",'warning');;return;}
    }
	var refcode=$("#refcode").val();
	var cifno=$("#cifno").val();
	var acno=$("#acno").val();
	var  mode=2;
	if (bnkid==0) {mode=1};

	$.ajax({
        type:'post',
        url:'savebankreg',

        data:{bnkid:bnkid,edate:edate,name:name,
            mobno:mobno,refcode:refcode,cifno:cifno,acno:acno, mode:mode,},

        beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#csrf-token").attr('content'));},
        success: function (response) {
            if (response > 0) {
                makealert('','Record saved successfully!','success');
                location.reload();
                $("#bnkid").val(0);

            }else {
                makealert('','somthing went wrong','error');}}
    });
}

function searchbank() {
    var where="";
    $.ajax({
        type:'post',
        url:'searchbnk',
        data:{ where:where,},
        beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#csrf-token").attr('content'));},
        success: function (response) {
            alert(response);
         $('#tbldata').html(response);
         setresponsive();
          }
    });
       
}

function setresponsive() {
  $("table").tableShrinker({
  customToggle: ["<span>˅</span>","<span>˄</span>"],
  customToggleAll: ["<span>˅</span>","<span>˄</span>"],
  showToggle:true,
  showToggleAll:true,
  iconsOnLeft:true
  });
 // $('.tablesorter').tablesorter();
 // $('.tablepager').tablepager();
     $('.table tbody').paginathing({
      perPage: 10,
      insertAfter: '.table',
      pageNumbers: false
    });
 

}
