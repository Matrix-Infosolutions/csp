@extends('layout')
@section('content')
<div class="container-fluid" >
	<input id="srvcdetid" value="0" class=" form-control form-control-sm d-none"  >
	<div class="form-row">
	    <div class="col-lg-2 col-sm-12 ">
					<label >Select Services</label>
					<datalist id="srvcidlist"></datalist>
      				<input id="srvcid" list="srvcidlist" class=" form-control form-control-sm" autofocus="true" >
	    </div>
	    <div class="col-lg-8 col-sm-12">
					<label>Description</label> 
  					<textarea class="form-control" id="srvcdec" placeholder="Description" rows="2" ></textarea>
					</div>

					<div class="col-lg-2 col-sm-12">
						{{-- <label>Save</label>  --}}
						<br>
						<button type="button" id="btnsave" class="  fa-fa-save btn btn-primary mt-3 text-right"><i class="fa fa-save"></i>&nbsp;Save</button>
					</div>
	</div>


	<div class="form-row mt-5">
  <div class="col-lg-12">
<table class="table display table-bordered" style="width:100%" id="tbldata">
 
</table>
</div>
</div>
</div>
<script src="../ujs/servicemaster.js"></script>

@endsection
































