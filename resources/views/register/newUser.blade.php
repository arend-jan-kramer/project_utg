@extends('template/nosidebar')

@section('body')
<div id="content">
	<div class="max-width">
		{{ Form::open(["url" => "profile", "method" => "post", "class" => "form form-layout"]) }}
		<label for="first_name">First name</label>
		{{ Form::input("text", "first_name", $data['user']->first_name, ["id" => "first_name"]) }}
		<label for="last_name">Last name</label>
		{{ Form::input("text", "last_name", $data['user']->last_name, ["id" => "last_name"]) }}
		<label for="email">Email</label>
		{{ Form::input("text", "email", $data['user']->email, ["id" => "email"]) }}
		<label for="type">Your function('s)</label>
		{{ Form::select("user_type", $data['category'], $data['user']->userType_id, ["id" => "type"]) }}
		{{ Form::textarea('about', null, ["size" => '30x5', 'placeholder' => 'Somthing about you!']) }}
		{{ Form::submit('Edit', ['class' => 'btn default']) }}
		{{ Form::close() }}
  </div>
</div>
@endsection
