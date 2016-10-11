<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My App @yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- FontAwesome core CSS -->
        <link href="{{url('/css/font-awesome.min.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{url('/css/sticky-footer-navbar.css')}}" rel="stylesheet">

        <!-- jquery UI -->
        <link href="{{url('/css/jquery-ui.css')}}" rel="stylesheet">

    </head>
    <body>
      @include('layout.navbar')
      <div class="container">
        @yield('breadcrumb')
        @yield('content')
      </div>
    </body>
<script src="{{url('/js/jquery.min.js')}}"></script>
<script src="{{url('/js/jquery-ui.js')}}"></script>
<script src="{{url('/js/bootstrap.min.js')}}"></script>
</html>