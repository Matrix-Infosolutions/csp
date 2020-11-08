 @extends('layout')
 @section('content')
 <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
 <style>
  /* Make the image fully responsive */
  /*.carousel-inner img {
    width: 100%;
    height: 100%;*/
 /* }*/
  .xs-margin {
    margin-top: 100px!important;
  }
 .carousel-inner img {
    width: 100%;
    height: 100%;

  }
  </style>
 
 <div class="container-fluid" style="">
    <div class="form-row">
     <div id="myslider" class="carousel slide col-lg-10 col-sm-12 mb-4 mb-md-0" data-ride="carousel" style="width:100%;">
     <ol class="carousel-indicators">
        <li data-target="#myslider" data-slide-to="0" class="active"></li>
@for ($i=1; $i<=4; $i++)

<li data-target="#myslider" data-slide-to="{{$i}}" class=""></li>
@endfor
      </ol>
    
       <div class="carousel-inner ">
        <div class="carousel-item active">
             <img src="/img/slider/1.jpg" style="height: 350px!important; width: 100%;"class=" d-none d-lg-block"> 
              <img src="/img/slider/1.jpg" style="height: 180px!important; width: 100%;"class="d-lg-none">
        </div>
   
    
         @for ($i=2; $i<=5; $i++)
         <div class="carousel-item" >   
        <img src="/img/slider/{{$i}}.jpg" style="height: 350px!important; width: 100%;" class=" d-none d-lg-block">
         <img src="/img/slider/{{$i}}.jpg" style="height: 180px!important; width: 100%;" class="d-lg-none">
      </div>
      
      @endfor
      </div>
       </div>

 
<div class="col-lg-2 d-flex justify-content-center">
    <div class="card" style="border-radius:1rem!important; width: 250px!important; background-color: #ffffff;"> 
     <br>
    <h5 class="d-flex justify-content-center " style="color: #800080; font-size:25px;"><b>Shree Sai</b></h5> 
    <br>
    <h5 class="d-flex justify-content-center"><b>Time</b></h5> 
    <h5 class="d-flex justify-content-center"><b>11 Am To 5 Pm</b></h5> 
    <br>
     <h5 class="d-flex justify-content-center"><b>Status</b></h5> 
    <div class="d-flex justify-content-center"> <input type="checkbox" checked data-toggle="toggle"data-on="<b>Shop Open</b>"  data-off="<b>Shop Close</b>"  data-onstyle="success"  data-offstyle="danger" id="isclose" ></div>
     <br>
     <br>
     <br>
     <h2 class="text-center" style="font-family:'yanone Kaffeesatz',sans-serif; font-size:15px">
        <b>Pure Banking Nothing Else.</b></h2>
 
    </div>
</div>
</div>
     

 
 <div class="form-row d-flex justify-content-center">
    <div class="col-lg-12 mt-4 d-flex justify-content-center">
         <h1>Our Services</h1>
    </div>     
 </div>
    
 
<div class="form-row">
<div class="col-lg-3 mb-4 mb-md-0">
<div class="card" >
    <img src="/img/logo/i1.jpg" class="card-imp-top">
        <div class="card-body" style="height: 255px;">
            <h6 class="card-title"><b>कॅश ट्रान्सकॅशन</b></h6>
             <p class="card-text">Cash deposit and withdrawal, closing out an Account with withdrawal, cash transfer</p>
        </div>
    </div>
</div>

<div class="col-lg-3 mb-4 mb-md-0 ">
<div class="card" >
    <img src="/img/logo/i2.jpg" style="height: 200px" class="card-imp-top">
        <div class="card-body"  style="height: 255px;">
            <h6 class="card-title"><b>अटल पेंशन योजना (APY) </b></h6>
             <p class="card-text">असंगठित क्षेत्र में काम करने वाले और मजदूरों को जीवनभर की पेंशन प्रदान करने के लिए अटल पेंशन योजना (एपीवाई) शुरू की गई थी।यदि आप इस योजना में शामिल होते हैं, तो केंद्र सरकार आपको और आपके पति या पत्नी को जीवन भर न्यूनतम पेंशन की गारंटी देती है।</p>
        </div>
    </div>
</div>


<div class="col-lg-3 mb-4 mb-md-0 ">
<div class="card" >
    <img src="/img/logo/i3.png" style="height: 200px" class="card-imp-top">
        <div class="card-body"  style="height: 255px;">
            <h6 class="card-title"><b> प्रधानमंत्री सुरक्षा बीमा योजना (PMSBY)</b></h6>
             <p class="card-text">प्रधानमंत्री सुरक्षा बीमा योजना आम आदमी को बेहद कम प्रीमियम में बीमा कराने की सुविधा देती है। इस योजना का लक्ष्य है कि देश का गरीब से गरीब व्यक्ति भी बीमा का लाभ उठा सके ताकि उसके जीवन में किसी भी दुर्घटना के समय आर्थिक परेशानी न आए। PMSBY के तहत आपको 2 लाख रुपये का दुर्घटना बीमा मिलेगा। </p>
        </div>
    </div>
</div>


<div class="col-lg-3 mb-4 mb-md-0">
<div class="card" >
    <img src="/img/logo/i4.png" style="height: 200px" class="card-imp-top">
        <div class="card-body"  style="height: 255px;">
            <h6 class="card-title"><b>प्रधान मंत्री जीवन ज्‍योति बीमा ज्‍योति योजना (PMJJBY)</b></h6>
             <p class="card-text">प्रधानमंत्री जीवन ज्योति बीमा योजना (PMJJBY) एक टर्म इंश्योरेंस प्लान है. प्रधानमंत्री जीवन ज्योति बीमा योजना (PMJJBY) में निवेश के बाद अगर व्यक्ति की मौत हो जाती है तो तो उसके परिवार को 2 लाख रुपये मिलते हैं.</p>
        </div>
    </div>
</div>
    <div class="col-lg-12 m-3 d-flex justify-content-end">
         <a class="btn btn-primary float-right text-center" href="{{url('getservicelist/0')}}">View More</a>    
    </div>
 
</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        getstatus();
    });
    function getstatus() {
        var mode=2;
        var value=$('#isclose').is(':checked') ;
        
        if (value==true ) {value=1; } else {value=0;}
        $.ajax({
type: "post",
url: "getsts",
datType:"json",
data: {mode:mode,value:value,},

        beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#csrf-token").attr('content'));},

success: function (response) {

if (response==0) {$('#isclose').bootstrapToggle('on');
} 
 else
{
     $('#isclose').bootstrapToggle('off');
}
$('#isclose').bootstrapToggle('disable');
}
});
    }
</script>
 
 @endsection
