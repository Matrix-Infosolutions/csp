<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<meta name="csrf-token" id="csrf-token" content="{{csrf_token()}}" />
<style type="text/css" media="screen">
.swal-height {
  height: 50!important;
}  
.swal-title {
  margin: 0px;
  font-size: 16px;
  box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.21);
  margin-bottom: 28px;
}
#divLoading
{
    display : none;
}
.cbox{border:1px solid red;background:yellow!important;}
#divLoading.show
{
    display : block;
    position : fixed;
    z-index: 100;
    background-image : url('../img/833.gif');
    background-color:#666;
    opacity : 0.4;
    background-repeat : no-repeat;
    background-position : center;
    left : 0;
    bottom : 0;
    right : 0;
    top : 0;
}
</style>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="../mis/mis.js"> </script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 --}}
    <!-- Styles -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
{{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/> --}}
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- Data table js links -->
  <link href="../mis/jquery.table-shrinker.css" rel="stylesheet">
  <script src="../mis/jquery.table-shrinker.js"> </script>

 {{--  <link href="../vendr/pagnation/sorter.css" rel="stylesheet">
  <script src="../vendr/pagnation/sorter.js"> </script>
  <link href="../vendr/pagnation/pager.css" rel="stylesheet">
  <script src="../vendr/pagnation/pager.js"> </script> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
   <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8" async defer></script>
   {{-- <script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script> --}}
   <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" type="text/javascript" charset="utf-8" async defer></script>

  {{-- <script src="../vendr/pagnation/paginathing.js"> </script> --}}

<!-- end -->

{{-- toast --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.1/bootbox.min.js" integrity="sha512-eoo3vw71DUo5NRvDXP/26LFXjSFE1n5GQ+jZJhHz+oOTR4Bwt7QBCjsgGvuVMQUMMMqeEvKrQrNEI4xQMXp3uA==" crossorigin="anonymous"></script>

{{-- toast --}}

 <script>

 $(document).ajaxStart(function () {            
        $("div#divLoading").addClass('show');
    }).ajaxError(function (e, xhr, opts) {
        $("div#divLoading").removeClass('show');
    }).ajaxComplete(function (e, xhr, opts) {
        $("div#divLoading").removeClass('show');
    }).ajaxStop(function () {
        $("div#divLoading").removeClass('show');
    });
  </script>