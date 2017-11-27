{{ Form::open(['route' => 'register', "class" => "form form-layout"]) }}
{{ Form::input('text', 'first_name', null, ["placeholder" => "first name", "required", "autofocus"]) }}
{{ Form::input('text', 'last_name', null, ["placeholder" => "last name", "required", "autofocus"]) }}
{{ Form::input('email', 'email', null, ["placeholder" => "email", "required"]) }}
{{ Form::select('userType', $type, null, ["placeholder" => "user type", "required"]) }}
{{ Form::select('userCategory', $category, null, ["placeholder" => "category", "required"]) }}
{{ Form::input('password', 'password', null, ["placeholder" => "password", "required", " "]) }}
{{ Form::input('password', 'password_confirmation', null, ["placeholder" => "confirm password"]) }}
{{ Form::submit('Register', ["class" => 'button']) }}
{{ Form::close() }}
