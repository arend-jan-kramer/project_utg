@extends('template/nosidebar')

@section('body')  
  {{ Form::open(['route' => 'login', "class" => "form form-layout"]) }}
  {{ Form::input('email', 'email', null, ["placeholder" => "E-Mail Address", "required", "autofocus" => true, "", "autocomplete" => "off"]) }}
  {{ Form::input('password', 'password', null, ["placeholder" => "password", "required", " "]) }}
  {{ Form::input('checkbox', 'remember', null, ["placeholder" => "Remember Me"]) }}
  {{ Html::link("route('password.request')", 'Forgot password') }}
  {{ Form::submit('Login', ["class" => 'button']) }}
  {{ Form::close() }}
@endsection
