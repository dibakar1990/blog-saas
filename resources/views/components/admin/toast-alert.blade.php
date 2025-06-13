<script>
    toastr.options = {
      "closeButton": true,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
</script>

@if ($message = Session::get('success'))
  <script>
    $( document ).ready(function() {
      toastr.success('{{$message}}');
    });
  </script>
@endif

@if ($message = Session::get('error'))
  <script>
    $( document ).ready(function() {
      toastr.error('{{$message}}');
    });
  </script>
@endif

@if ($message = Session::get('warning'))
  <script>
    $( document ).ready(function() {
      toastr.warning('{{$message}}');
    });
  </script>
@endif