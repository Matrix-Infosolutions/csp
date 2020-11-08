<!DOCTYPE html>
<html>
<head> 
@include('header')
	<title>Shree Sai (CSP)</title>
</head>
<style >
   .vertical-center {
      min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
      min-height: 100vh; /* These two lines are counted as one :-)       */
      min-width: 100%;  /* Fallback for browsers do NOT support vh unit */
      min-width: 100vh; /* These two lines are counted as one :-)       */

      display: flex;
      align-items: center;
    }
  .ahover
  {
    background-color: transparent;
    color: white;
  }
  .ahover:hover
  {
    opacity:1;
    color: silver!important;
  }
  .marginauto {
    margin: 10px auto 20px;
    display: block;
}
</style>
<body style="background-color:#EDEBE8!important">
 <div id="divLoading">
</div>

  <!-- <nav class="navbar navbar-default navbar-fixed-top > -->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top justify-content-between" >
  <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;CSP</a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white ahover" style="font-size: 17px;" href="{{url('contact')}}">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white ahover" style="font-size: 17px;" href="{{url('about')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white ahover" style="font-size: 17px;" href="{{url('getservicelist/0')}}" onclick="">Services</a>
      </li>
    
      <!-- Dropdown -->
    <li class="nav-item dropdown d-none" id="dtran">
      <a class="nav-link dropdown-toggle text-white ahover" href="#" id="navbardrop" data-toggle="dropdown" style="font-size: 17px;">
        Transaction
      </a>
      <div class="dropdown-menu" >
        <a class="dropdown-item d-none" href="{{url('bankreg')}}">Bank Registration</a>
        <a class="dropdown-item" href="{{url('servicemaster')}}">Service Master</a>
        <a class="dropdown-item d-none" href="adsupload">ADS Upload</a>
        <a class="dropdown-item" href="{{url('getcontactlist')}}">Query list </a>
        <a class="dropdown-item" onclick="setstatus();" href="#">Shop Status </a>
      </div>
    </li>    
    </ul>
    <ul class="navbar-nav d-none">
      <li class="nav-item">
      <a href="{{url('login')}}" class="btn btn-sm btn-outline-light" style="font-size: 17px;"><b>Login</b></a>
      </li>
                 
    </ul>
  </div>  
</nav> <br><br class="d-lg-none d-xl-block">
     <div class="container-fluid" style=""> <form autocomplete="off">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
     <main role="main" class="h-100" style="margin-top:3%!important;">
            @yield('content')                                      </main> 
     </form>

     </div>
                

<footer class="section footer-classic context-dark bg-dark text-white " >
  <div class="container-fluid">
      <div class="form-row">
            <div class="col-lg-6 col-sm-6">
              <p class="text-justify ">Customer Service Point (CSPs )acts as a mini bank by carrying out limited transactions
              and sourcing of business. helps Customers deposit money and withdraw. Bank Mitra There
              are around 30 types of transactions/business are carried out by CSPs.</p>
             </div>


  <div class="col-lg-4 col-sm-6 ml-5">
             
                <div class="text-justify"><i class="fas fa-map-marker-alt" style="color:#FFFFFF"></i>&nbsp;&nbsp;Miraj midc road khatib nagar opp new church,Miraj 416410.</div>
                <div class="text-justify"><i class= "fa fa-envelope " style="color:#FFFFFF"></i>&nbsp;&nbsp;prasad46240@gmail.com</div>
                    
                <div class="text-justify"><i class="fa fa-phone" style="color:#FFFFFF"></i>&nbsp;&nbsp;+91 9403046240</div>
  </div>     

</div>

    <div class="form-row">
        <div class="col-lg-12 col-sm-12 d-flex justify-content-center ">
          <p><b>©  2018 . All Rights Reserved.</b></p>
        </div>
    </div>
      
    </div>
  </footer>
</body>
<script type="text/javascript" charset="utf-8">
  function getlist() {
  var srvcid=0;
  $.ajax({
  type: "post",
  url: "servicelist",
  data: {srvcid:srvcid,},
  success: function (response) {
  
  }
  });
  }
  function setstatus() {
    var mode=1;
        var value=$('#isclose').is(':checked') ;
        
        if (value==true ) {value=1; } else {value=0;}
        $.ajax({
        type: "post",
        url: "getsts",
        datType:"json",
        data: {mode:mode,value:value,},
        beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#csrf-token").attr('content'));},
        success: function (response) {
        var url = "{{url('/')}}";
        location.href=url;

        }
        });
      }

      function getrole() {
        $("#dtran").addClass('d-none');
        var session = "{{Session::get('role')}}";
        if(session!="".trim() && session != undefined)
        if(session=="user"){
          $("#dtran").addClass('d-none');
        }else{
          $("#dtran").removeClass('d-none');
        }
      }
  $( document ).ready(function() {
   getrole();
});
</script>
</html>

     
       
    

