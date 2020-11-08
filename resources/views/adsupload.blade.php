@extends('layout')
@section('content')
  <link href="../vendr/dropzone/dropzone.css" rel="stylesheet">

  <script src="../vendr/dropzone/dropzone.js"></script>
 

  

{{-- <div class="container">
    <div class="row">
 --}} 		 
	 <form role="form" action="{{url('dropzoneStore')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <!-- You can add extra form fields here -->

    <input hidden id="file" name="file"/>

    <!-- You can add extra form fields here -->

    <div class="dropzone dropzone-file-area" id="fileUpload">
        <div class="dz-default dz-message">
            <h3 class="sbold">Drop files here to upload</h3>
            <span>You can also click to open file browser</span>
        </div>
    </div>

    <!-- You can add extra form fields here -->

    <button class="btn btn-primary" type="submit">Upload</button>
</form>
     

{{-- </div>
</div>
 --}}
<script type="text/javascript">

   Dropzone.autoDiscover = false;

   $(document).ready(function () {
        $("#fileUpload").dropzone({
            maxFiles: 1,
             acceptedFiles: ".jpeg,.jpg,.png,.gif",
            url: "dropzoneStore",
            success: function (file, response) {
                console.log(response);
            }
        });
   })
   
</script>
@endsection