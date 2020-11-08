@include('header')  
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
     <style>
      .vertical-center {
      min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
      min-height: 100vh; /* These two lines are counted as one :-)       */

      display: flex;
      align-items: center;
    }
    .insidespan{
    position: absolute;
    margin-left: 5px;
    margin-right:15px; 
    /*height: 25px;*/
    display: flex;
    margin-top:10px;
    align-items: center;
    }
  .insideinput{
    padding-left: 25px;
     
      }
    </style> 

    <body style="background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);">
      <div class=" vertical-center">
        <div class ="mt-4 mb-4 container-fluid align-self-center">
        <center>
        <div class=" bg-white col-lg-4" style="border-radius:1rem!important;height:340px;">    
          <!-- <a class="col-lg-12 d-flex justify-content-end " href="/"> <i class="fa fa-times" style="font-size:27px;color:red"></i> 
        </a> --> 
        <h1 class="font-weight-bolder" style="font-family: 'Roboto Slab',serif;"> LOGIN </h1>  
        <div class="form-row justify-content-center mb-3">
        <div class="col-lg-12">
          <!-- <span class="insidespan">
          <i class="fas fa-phone" style="color:#008080" aria-hidden="true"></i>
          </span> -->
                <input type="text" class="insideinput form-control " id="mobno"style="border-radius:3rem!important" maxlength="10" onkeyup="isnumber(this);" autofocus="true"  placeholder="Mobile No.">
              </div>
        </div>  
              <div class="form-row  justify-content-center mb-3">
                  <div class="col-lg-12">
                   <!--  <span class="insidespan">
                    <i class="fas fa-key" style="color:green" aria-hidden="true"></i>
                    </span> -->
                        <input type="password" id="pswd" class="form-control insideinput"style="border-radius:3rem!important" placeholder="Password">
                        <span toggle="#pswd" class="fas fa-eye-slash float-right toggle-password" style="margin-top: -25px;margin-right:10px;cursor:pointer;">
          
          </span>
                        
                      </div>
                </div>
                <div class="form-row justify-content-center mb-3 ">
                  <div class="col-lg-6 text-right ">
                    <!-- <label class="form-check-label"> -->
                      <!-- <input type="checkbox" class="form-check-input" value="">Remember Password -->
                  </div>
                </div>
                <div class="form-row justify-content-center mb-3 ">

            <a type="button" href="#" id="btnlogin" class="form-control btn btn-success col-lg-12 mb-3" style="border-radius:3rem!important">
              Sign In</a>
              <a href="signup" type="button" class="form-control btn btn text-white col-lg-12 d-none" style="border-radius:3rem!important ;background-color:#FF6347";>Sign Up
              </a> 
              <a type="button" href="/" id="btnlogin" class="form-control btn btn-primary col-lg-12 mt-3" style="border-radius:3rem!important">
              Close</a>
            </div>
              </div>
            </center>
            </div>
             </div>

        </div>

    </body>
  </html>
<script>
$(document).ready(function() {
  $(".toggle-password").click(function() {
  $(this).toggleClass("fa-eye-slash fa-eye");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
  });
});
  
</script>
    <script src="../ujs/signinlogin.js"></script>



