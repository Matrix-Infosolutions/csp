$(document).ready(function() {
	docready();
});

function docready () {

	DataListWhere("srvcidlist","srvcmaster","");
	 $("#btnsave").click(function() {
	 	sevicesave();

 });
	  $("#srvcid").change(function() {
	 	var result= getdatalistID("srvcid");
	 	if (result==false) {makealert("srvcid","Select valid service",'warning');
         issetfocus("srvcid");
	 	return;}else{searchservice(result);}
 });
	// body...
}

function sevicesave(){
	if (isblank("srvcid")==false) {makealert("srvcid","Please select valid service",'warning');return;}
	if (isblank("srvcdec")==false) {makealert("srvcdec","Please enter a description",'warning');return;}
var srvcdetid=$("#srvcdetid").val();
var srvcid=$("#srvcid").val();
srvcid=getdatalistID("srvcid");
var srvcdec=$("#srvcdec").val();

var mode=2;
if(srvcdetid==0){mode=1;}
$.ajax({
type: "post",
url: "saveservice",
data: {srvcdetid:srvcdetid,srvcid:srvcid,srvcdec:srvcdec,mode:mode},
success: function (response) {
 
	if (response > 0) {
                makealert("",'Record saved successfully!',"success");
                location.reload();
                $("#sevcdetid").val(0);

            }else {
                makealert("",'something went wrong!',"error");}}
});
}


function searchservice(id) {
    var where="";
    where=" and srvcid='"+id+"'";
    $.ajax({
        type:'post',
        url:'srvcsearch',
        data:{ where:where,},
        beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#csrf-token").attr('content'));},
        success: function (response) {
            // alert(response);
            $('#tbldata').html("");
         $('#tbldata').html(response);
         setresponsive();
          }
    });
       
}

function setresponsive() {
    $('#tbldata').DataTable( {
    	 retrieve: true,
        "pagingType": "full_numbers",
           rowReorder: {
            selector: 'td:nth-child(0)'
        },
        responsive: true
    } );
 
 // $('.tablesorter').tablesorter();
 // $('.tablepager').tablepager();

    //  $('.table tbody').paginathing({
    //   perPage: 10,
    //   insertAfter: '.table',
    //   pageNumbers: false
    // });
}

function editservice(id) {
	
	var where ="";
	 where=" and srvcdetid='"+id+"'";
	$.ajax({
type: "post",
url: "srvcedit",
data: {where:where,},
dataType:"json",
success: function (response) {
$('#srvcdetid').val(response[0]['srvcdetid']);
$('#srvcid').val(response[0]['srvcid']);
var srvname=getdatalistValue("srvcid");
$('#srvcid').val(srvname);  
$('#srvcdec').val(response[0]['srvcdec']);

}
});

}

function deleteservice(id) {
	var srvcdetid=id;
	var mode=3;
	$.ajax({
type: "post",
url: "saveservice",
data: {srvcdetid:srvcdetid,mode:mode},
success: function (response) {

		if (response > 0) {
                makealert("",'Record delete successfully!',"success");
                var srvcid=$("#srvcid").val();
                srvcid=getdatalistID("srvcid");
                searchservice(srvcid);
            }else {
                alert("",' Please try again!','warning');}

}
});

}




 



