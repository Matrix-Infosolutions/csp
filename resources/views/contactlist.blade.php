@extends('layout')
 @section('content')
 <div class="container-fluid">	
 	<table class='display table table-sm table-hover table-bordered table-condensed' id="tbldata">
<thead><tr>
<th>#</th>
<th>Name</th>
<th>Mob.no</th>
<th>Query</th>
<th>Option</th>
</tr></thead>
<tbody>
@php $cnt=0; @endphp
@foreach($result as $row)
<tr>
<td>{{++$cnt}}</td>
<td>{{$row->uname}}</td>
<td>{{$row->mobno}}</td>
<td>{{$row->desc}}</td>
<td>
 <a href='#' onclick='delcontact("{{$row->cid}}")'><i class='fas fa-trash-alt' style='font-size:20px;'></i><a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
<script type="text/javascript">
	 $(document).ready(function(){
        setresponsive();loadgif();
    });
 
function delcontact(id) {
	var cid=id;
	var mode=3;
$.ajax({
type: "post",
url: "savecontactus",
data: {cid:cid,mode:mode},
success: function (response) {
alert("Record deleted successfully");
location.reload();
}
});
}

function setresponsive() {
	$('#tbldata').DataTable( {
    	 retrieve: true,
        "pagingType": "full_numbers",
           rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
}
</script>





























 @endsection
