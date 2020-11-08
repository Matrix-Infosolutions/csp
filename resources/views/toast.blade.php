<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;">

  <!-- Then put toasts within -->
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header {{$result['bgcolor'] ?? bg-info}}">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">CSP</strong>
      <small>Now</small>
      <a type="button" href="{{$result['url']}}" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </a>
    </div>
    <div class="toast-body ">
      {{$result['msg']}}
    </div>
  </div>
</div>
<script>$( document ).ready(function() {
$('.toast').toast('show')});</script>