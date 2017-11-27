@extends('template/base')

@section('body')
  <div class="projects"></div>
@endsection

@push('customscripts')
<script type="text/javascript">
  $(document).ready(function() {
    var time = function(x) {
      return x * 1000;
    }
    
    var refresh = function() {
    $.get('/getproject').then(response => {
      $('.projects').html(response);
    });
    setTimeout(function() {
      // refresh();
    }, time(10));
  }
  refresh();
  });
</script>
@endpush