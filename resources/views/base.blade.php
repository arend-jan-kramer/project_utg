<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Up to go</title>

        <!-- Style -->
        <link href="{{mix('css/app.css')}}" type="text/css" rel="stylesheet">

    </head>
    <body>

    @include('include/header')

    <div id="wrapper">

        @include('include/sidebarLeft')

        @yield('body')

        @include('include/sidebarRight')

    </div>

    @include('include/footer')

    @include('include/notification')

    @include('include/modal')

    <div id="app"></div>

    <!-- script -->
    <script src="{{mix('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
