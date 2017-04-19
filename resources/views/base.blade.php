<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Up to Go</title>

        <!-- Style -->
        <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">
        
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>

    @include('include/header')
    
    <div id="content">

        @include('include/sidebarLeft')
        
        @yield('body')

        @include('include/sidebarRight')

    </div>
    
    @include('include/footer')

    @include('include/notification')

    @include('include/modal')

    <!-- script -->
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>