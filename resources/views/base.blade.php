<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Up to Go</title>

        <!-- Style -->
        <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">
        
    </head>
    <body>

    @include('include/header')
    
    <article>

        @include('include/sidebarLeft')
        
        @yield('body')

        @include('include/sidebarRight')

    </article>
    
    @include('include/footer')

    @include('include/notification')

    @include('include/modal')

    <div id="app"></div>

    <!-- script -->
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>