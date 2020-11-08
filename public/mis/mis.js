function loadgif(argument) {
   $("div#divLoading").removeClass('show');
   $(document).ajaxStart(function () {            
        $("div#divLoading").addClass('show');
    }).ajaxError(function (e, xhr, opts) {
        $("div#divLoading").removeClass('show');
    }).ajaxComplete(function (e, xhr, opts) {
        $("div#divLoading").removeClass('show');
    }).ajaxStop(function () {
        $("div#divLoading").removeClass('show');
    });
}



function isnumber(input) {
  //var str=$("#"+id).val();
  var reg = /[^0-9]/gi; 
  input.value=input.value.replace(reg,"");
	
}

 function isblank(id){
 	var str=$("#"+id).val().trim();
 	var lent=str.length;
 	if (lent==0 && str != undefined) {return false;}
 	return true;
 }

 function issetfocus(id) {
 	$("#"+id).val("");
 	 $("#"+id).focus();
 }

 function getJqueryDateTime_PassDt(dt,format) {
    var datetime=dt;
    if(format=="dmy"){
        datetime = dt.split("-").reverse().join("/");
    }
    else if(format=="ymd"){
        datetime = dt.split("/").reverse().join("-");
    }
    return datetime;
}

function makewhr(id,operator,clmname) {
  var str=$("#"+id).val();
  var lent=str.length;var result="";
  if (lent==0 && str != undefined) {return result;}
  if(operator == 'like'){
  result=" And "+clmname+" "+operator+"'%"+str+"%'";
  }else{
  result=" And "+clmname+" "+operator+"'"+str+"'"; 
  }
  return result;
}

function getdatalistID(id){
    var val=document.getElementById(id).value.trim();
    if(val==undefined || val=="".trim()){return;}
    var opt;
    opt = $('option[value="'+$('#'+id).val()+'"]');
    opt=opt.attr('id');
    if(opt == undefined || opt=="".trim()){ return false;}
    else {return opt;}
}
function getdatalistValue(id){
    var val=document.getElementById(id).value.trim();
    if(val==undefined || val=="".trim()){return;}
    var opt;
    opt = $('option[id="'+$('#'+id).val()+'"]');
    opt=opt.attr('value');
    if(opt == undefined || opt=="".trim()){ return false;}
    else {return opt;}
}
function DataListWhere(dtlist,url,where) {
    $.ajax({
        url: url,
        type: "post",
        data: {where: where,},
        success: function(data) {
            $('#' + dtlist).html(data);
        }
    });
}

function getcurrentdate() {
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd;
return today;
}

function makealert(id,msg,type) {
  var icon="";
  if(type=="warning"){
    icon="<i style='font-size:18px;color:orange;' class='fas fa-exclamation-triangle'></i>";}
  else if(type=="error"){
    icon="<i style='font-size:18px;color:red;' class='fas fa-exclamation-circle'></i>";
  }
  else if(type=="success"){
    icon="<i style='font-size:18px;color:blue;' class='fas fa-check-circle'></i>";
  }
  var html=icon+" "+"<span class='text-dark' style='font-size:18px;'>"+msg+"</span>";

  bootbox.alert({
    message: html,
    callback: function (result) {
      if(id!=''.trim()){
     issetfocus(id);}
    }
});

}