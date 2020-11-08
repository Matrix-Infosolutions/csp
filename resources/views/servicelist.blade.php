@extends('layout')
@section('content')
<div class="container-fluid" style="">
	<div class="form-row">
	    <div class="col-lg-10">
      				<input type="text" class="form-control" placeholder="search..." id="srvcsrch">
      			</div>	
      				<div class="col-lg-2 mt-2 mb-mt-0 d-flex justify-content-end">
      				<a type="button" class="btn btn-primary text-right" onclick="loadsrch();">Search</a>
      				<a type="button" class="btn btn-success text-right ml-2" href="{{url('getservicelist/0')}}">
  					<i class="fas fa-sync-alt"></i>
      				</a>
      				</div>
	    
	</div>
	<br>
	<div id="accordion">
		@php $cnt=0;$bgclr='btn-outline-primary'; @endphp
		@foreach($result as $row)
		<div class="card">
			 
			<a style="line-height:1em;" class="{{$bgclr}} card-header form-row" data-toggle="collapse" href="#cls{{$row->srvcid}}">
		 	<span class="col-lg-10 col-md-6">{{$row->srvcname}}</span>
		 	<span class="col-lg-2 col-md-6 fas fa-chevron-circle-down d-flex justify-content-end"></span>
		 	</a>
		</div>
		<div class="collapse" id="cls{{$row->srvcid}}" data-parent="#accordion">
			<div class="card-body bg-white" id="cdet{{$row->srvcid}}">
			<ul>
				@foreach($det as $row1)
 				@if ($row->srvcid == $row1->srvcid)
				<li class="">{{$row1->srvcdec}}</li>
				@endif
				@endforeach
			</ul>
			</div>
		</div>
		@endforeach
	</div>
</div><br>
<script charset="utf-8">
	function loadsrch() {
		var srch=$("#srvcsrch").val();
		var url = "{{url('getservicelist')}}"+"/"+srch;
		location.href=url;
        
	}
</script>




@endsection
