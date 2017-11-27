<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Up to go @yield('page-title')</title>
        <link href="{{mix('css/app.css')}}" type="text/css" rel="stylesheet">
    </head>
    <body class="thema{{ ( isset(Auth::user()->userType_id) ) ? '-'.Auth::user()->userType_id : '' }}">

		@include('include/header')

    <div id="wrapper">
      <div class="container">
        <div class="page-title">
                  <h1>@yield('page-title1')</h1>
                  <h2>@yield('page-title2')</h2>
                  <h3>@yield('page-title3')</h3>
                  <h4>@yield('page-title4')</h4>
                  <h5>@yield('page-title5')</h5>
                  <h6>@yield('page-title6')</h6>
        </div>
        <div class="content">
          @yield('body')
        </div>
      </div>
    </div>
    
    @include('include/footer')

  @include('include/notification')

  <div id="modal" class="modal hidden"></div>
<!-- script -->
<script src="{{mix('js/app.js')}}" type="text/javascript"></script>
@stack('customscripts')
</body>
</html>