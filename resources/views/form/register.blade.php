{{ Form::open(['route' => 'register', "class" => "form-layout"]) }}
{{ Form::input('text', 'name', null, ["placeholder" => "name", "required", "autofocus"]) }}
{{ Form::input('email', 'email', null, ["placeholder" => "email", "required"]) }}
{{ Form::select('userType', $userType, null, ["placeholder" => "user function", "required"]) }}
{{ Form::input('password', 'password', null, ["placeholder" => "password", "required", " "]) }}
{{ Form::input('password', 'password_confirmation', null, ["placeholder" => "confirm password"]) }}
{{ Form::submit('Register', ["class" => 'button']) }}
{{ Form::close() }}
