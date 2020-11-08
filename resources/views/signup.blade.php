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
    </style>    
    <body style="background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);">
      <div class="vertical-center">
        <div class ="mt-4 mb-4 container-fluid align-self-center "> 
            <center>
            <div class=" bg-white col-lg-4" style="border-radius:1rem!important height:390px";>
             <!--  <a class="col-lg-12 d-flex justify-content-end m-2" href="/"> <i class="fa fa-times" style="font-size:35px;color:black;"></i> 
        </a>     -->
        <h1 class="font-weight-bold" style="font-family: 'Roboto Slab', serif;"> SignUp </h1>  
        <div class="form-row justify-content-center mb-3">
        <div class="col-lg-12">
                <div class="input-group mb-3 mt-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user-circle" style="font-size:20px; color:blue"></i></span>
                    </div>
                      <input type="text" class="form-control"id="name" placeholder="Username" autofocus="">
                </div>
            </div>
        </div>      
              <div class="form-row  justify-content-center mb-3">
                <div class="col-lg-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone" style="font-size:20px; color:#008080"></i></span>
                    </div>
                      <input type="text" class="form-control" id="mobno" onkeyup="isnumber(this);" placeholder="Mobile No" maxlength="10" placeholder=" MOB NO">
                </div>
              </div>
            </div>
                <div class="form-row  justify-content-center mb-3">
                  <div class="col-lg-12">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key" style="font-size:18px; color:green"></i></span>
                    </div>
                      <input type="password" class="form-control" id="pswd" maxlength="8"  placeholder="PASSWORD">
                </div>     
                </div>
              </div>
                <div class="form-row  justify-content-center mb-3">
                  <div class="col-lg-12">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-check-circle" style="font-size:20px; color:darkred"></i></span>
                    </div>
                      <input type="password" class="form-control" id="cpwd" maxlength="8"   placeholder="Confirm Password">
                </div>         
                </div>
              </div>
               <div class="button col-lg-8">
              <button type="button" class="form-control btn btn-primary" style="border-radius:3rem!important" id="btnsave">Register</button>
               <a type="button" href="/" id="btnlogin" class="form-control btn btn-danger mt-3 mb-3" style="border-radius:3rem!important">Close</a>
                  </div>
                </div>
            </center> 
          </div> 

        </div>
    </body>
    </html>
    <script src="../ujs/login.js"></script>

            

 
