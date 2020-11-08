 @extends('layout')
 @section('content')
 <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
<div id="mtoast"></div>
<div class="container-fluid" style="">
	<center>
	<div class="form-row mt-2">
    <div class="col-lg-12">
	<h1 style="font-family: 'Roboto Slab', serif;
" class="font-weight-bold">Contact Us</h1>
</div>
</div></center>

<div class="form-row">
	<div class="col-lg-4">
		<div class ="card" style="border-radius:1rem!important;">
			<div class="card-body">
			<div class="col-lg-12 col-sm-12 d-flex justify-content-center"><h4><b>    Prasad P. Aoundhkar</b></h4>
			</div>
			
		<div class="form-row mt-2">
			  <div class="col-lg-12 col-sm-12" >
			  	<i class="fa fa-building" style="font-size:18px; color:#008080">
			  	<span class=" text-dark font-weight-normal ml-2" style="font-size:18px;">Shree Sai</span>
			 </i>
			</div>
		</div>	
		<div class="form-row mt-2">
			  <div class="col-lg-12 col-sm-12" >
			  	<i class="fa fa-phone" style="font-size:18px; color: green">
			  	<span class=" text-dark font-weight-normal ml-2" style="font-size:18px;">+91 9403046240</span>
			 </i>
			</div>
		</div>
            <div class="form-row mt-2">
			  <div class="col-lg-12 col-sm-12" >
			  	<i class= "fa fa-envelope " style="font-size:18px; color: #FF6347 ">
			  	<span class=" text-dark font-weight-normal ml-2" style="font-size:18px;">prasad46240@gmail.com</span>
			 </i>
			</div>
		</div>

			<div class="form-row mt-2">
				<div class="col-lg-12 col-sm-12">
				 <i class="fas fa-map-marker-alt" style="font-size:18px; color: darkred">
				<span class="text-dark font-weight-normal ml-2" style="font-size:18px;">
					Miraj midc road khatib nagar opp new church,Miraj 416410.
				</span>
				 </i> 
				</div> 
				<br><br>
			</div>
	

			 </div>
		</div>
	</div>
	
	<div class="col-lg-8 col-sm-12"><br class="d-lg-none">
		<img src="/img/cntimg/sbi2.jpg" style="height: 200px; width: 100%;">
	</div>
 
</div>

	<div class="row mt-5">
			<div class="col-12">
				 <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=250&amp;hl=en&amp;q=16.836826,74.643147+(shree%20sai)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
			</div>
				
	</div>

	<div class="form-row">
	<div class="col-lg-12 mt-3 d-flex justify-content-center">
	   <h1 class="font-weight-bold">Query Form</h1>
    </div>
</div>
<div class="form-row d-flex justify-content-center mb-4">
	<div class="col-lg-8 col-sm-12">
		<div class="card" style="border-radius:1rem!important;">
			<div class="card-body">
				<div class="row d-flex justify-content-center">
				<div class="col-lg-6 col-sm-6 ">
					<label >Name</label>
      				<input type="text" id="uname" class=" text-uppercase form-control" placeholder="Name">
				</div>
				<div class="col-lg-6 col-sm-6">
					<label>Mobile No</label>
      				<input type="text" id="mobno" class=" form-control" onkeyup="isnumber(this);" placeholder="Mobile No" maxlength="10">

                     <!-- {{-- <input id="telNo" name="telNo" class="form-control" placeholder="Mobile No" type="tel"  maxlength="10"> --}}
 -->

      				<span id="mermsg " class="text-danger" ></span>
				</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-sm-12">
					<label>Description</label> 
  					<textarea class="form-control" id="desc" placeholder="Description" rows="4" id=""></textarea>
					</div>
				</div>
				<div class="row float-right mt-2">
					<div class="col-lg-12 col-sm-12">
						<button type="button" id="btnsave" class="btn btn-primary text-right">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
	</div>

	 <script src="../ujs/contact.js"></script>
	
@endsection



	




