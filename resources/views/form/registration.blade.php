{{ Form::open(['url' => 'newUser', "class" => "form form-layout"]) }}
{{ Form::input('text', 'userName', null, ["placeholder" => "Your name"]) }}
{{ Form::input('email', 'userEmail', null, ["placeholder" => "Your email"]) }}
{{ Form::select('type', ['customer' => 'Klant', 'bussines' => 'Bedrijf'], null, ["class" => 'selectfield' ,"placeholder" => "Description"]) }}
{{ Form::input('text', 'company-name', null, ["placeholder" => "Company name"]) }}
{{ Form::submit('Create', ["class" => 'button']) }}
{{ Form::close() }}
