
 @extends('layout')
 @section('content')
<div class="container-fluid" style="background-color:#dbf3fa">
      <input class="form-control form-control-sm d-none" id="bnkid" type="text" value="0" placeholder="Date" >
<div class="form row justify-content-center">
	 <div class="col-lg-2 col-sm-12">
    <label for="ex1">Date</label>
    <input class="form-control form-control-sm" id="edate" type="text" placeholder="Date">
  </div>
  <div class="col-lg-3 col-sm-12">
    <label for="ex1">Name</label>
    <input class="form-control form-control-sm text-uppercase" id="name" type="text" maxlength="100" placeholder="Name" autofocus="">
  </div>
  <div class="col-lg-2 col-sm-12">
    <label for="ex1">Mob.No</label>
    <input class="form-control form-control-sm" id="mobno" onkeyup="isnumber(this);" placeholder="Mobile No" maxlength="10" type="text" placeholder="Mob.No">
  </div>
</div>
  <div class="form row justify-content-center mt-4">
   <div class="col-lg-2 col-sm-12">
    <label for="ex1">Ref.Code</label>
    <input class="form-control form-control-sm text-uppercase" id="refcode" type="text" maxlength="20" placeholder="Ref.Code">
  </div>
  <div class="col-lg-3 col-sm-12">
    <label for="ex1">CIF.No</label>
    <input class="form-control form-control-sm text-uppercase" id="cifno" type="text" maxlength="20"  placeholder="CIF.NO">
  </div>
  <div class="col-lg-2 col-sm-12">
    <label for="ex1">ACCOUNT No</label>
    <input class="form-control form-control-sm text-uppercase" id="acno" type="text"  maxlength="20" placeholder="AC/NO">
  </div>
  <div class="col-lg-12">
    <a name="" id="btnsave" class="btn btn-primary float-right mr-2" href="#" role="button"><i class="fa fa-save"></i>&nbsp; Save</a>
  </div>
</div>
{{-- <div class="form-row float-right">
  <button type="button" class="btn btn-primary btn-lg mt-4 mb-4 float-right" onclick="" id="btnsave">Save</button>
</div> --}}
<br>
<div class="form-row mt-3">
   
<table class="table shrink tablesorter table-bordered" style="width:100%!important" id="tbldata">

</table>
  
</div>
</div>
<script src="../ujs/bankreg.js"></script>

@endsection