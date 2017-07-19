@extends('base')

@section('body')
<div id="content">
	<div class="max-width">
    {{ Form::open(['url' => 'newUser', "class" => "form-layout"]) }}
		{{ Form::input('text', 'userName', null, ["placeholder" => "Your name"]) }}
		{{ Form::input('email', 'userEmail', null, ["placeholder" => "Your email"]) }}
		{{ Form::input('checkbox', 'userFunction', null, ["placeholder" => "Your function"]) }}

		{{ Form::close() }}
  </div>
</div>
@endsection
