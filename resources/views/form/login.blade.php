{{ Form::open(['route' => 'login', "class" => "form-layout"]) }}
{{ Form::input('email', 'email', null, ["placeholder" => "E-Mail Address", "required", " autofocus"]) }}
{{ Form::input('password', 'password', null, ["placeholder" => "password", "required", " "]) }}
{{ Form::input('checkbox', 'remember', null, ["placeholder" => "Remember Me"]) }}
{{ Html::link("route('password.request')", 'Forgot password') }}
{{ Form::submit('Login', ["class" => 'button']) }}
{{ Form::close() }}
