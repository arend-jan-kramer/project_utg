@extends('template/base')

@section('body')
  {{ Form::open(['route' => 'register', "class" => "form form-layout"]) }}
  {{ Form::input('text', 'first_name', null, ["placeholder" => "first name", "required", "autofocus"]) }}
  {{ Form::input('text', 'last_name', null, ["placeholder" => "last name", "required", "autofocus"]) }}
  {{ Form::input('email', 'email', null, ["placeholder" => "email", "required"]) }}
  
  {{ Form::select('userType', $type, null, ["placeholder" => "user type", "required", 'class' => 'userType']) }}

  <div class="multiple_select" hidden>
  {{ Form::input('text', 'userCategory', null, ["placeholder" => "category", "required", 'class' => 'multiple_val']) }}
    <ul hidden>
      @foreach($category as $key => $value)
        <li><label>{{ Form::checkbox('name', $value)}}<span>{{$value}}</span</label></li>
      @endforeach
    </ul>
  </div>
  {{--  {{ Form::select('userCategory', $category, null, ["placeholder" => "category", "required"]) }}  --}}

  {{ Form::input('password', 'password', null, ["placeholder" => "password", "required", " "]) }}
  {{ Form::input('password', 'password_confirmation', null, ["placeholder" => "confirm password"]) }}
  {{ Form::submit('Register', ["class" => 'button']) }}
  {{ Form::close() }}
@endsection

@push('customscripts')
<script>
  $(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (!$clicked.parents().hasClass("multiple_select")) $(".multiple_select ul").hide();
  });

  $('.userType').on('change', function(){
    if($(this).val() == 2){
      $('.multiple_select').show();
    }else {
      $('.multiple_select').hide();
      $('.multiple_val').val('');
      $.each($('.multiple_select input[type="checkbox"]'), function(){
        $(this).prop('checked', false);
      });
    }
  });

  $('.multiple_select input').on('click', function(){
    $('.multiple_select ul').toggle();
  });

  var arr = [];

  $('.multiple_select input[type="checkbox"]').on('click', arr, function(){
    $('.multiple_select ul').show();
      var title = $(this).val();
      if($(this).is(':checked')){
        arr.push(title);
        arr.sort();
      } else {
        var remove = arr.indexOf(title);
        arr.splice(remove++, remove);
      }
      console.log(arr);
      $('.multiple_val').val(arr);
  });
</script>
@endpush