<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>CRONIC</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://code.jquery.com/ui/1.11.4/themes/cupertino/jquery-ui.css'/>
    <link rel='stylesheet' href='{{ URL::to('css/fullcalendar.css') }}' />
    <link rel='stylesheet' href='{{ URL::to('css/jquery.datetimepicker.css')}}' />

    <link rel="stylesheet" href="{{ URL::to('css/select2.min.css') }}">
<link rel="stylesheet" href="{{ URL::to('css/select2-bootstrap.min.css') }}">

        <!-- Custom Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/stylish-portfolio.css" rel="stylesheet">
    <link href="/css/simple-sidebar.css" rel="stylesheet">
        <link href="/css/Supernice.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap-toggle.min.css') }}">



</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
@if (Auth::check())
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
    @endif
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Cronic
                </a>
            </div>

          @if (Auth::check())

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}"><span class="glyphicon glyphicon-home" title="Home"></span> <span class="mname"> Home</span></a></li>
                    <li><a href="{{ url('/articles') }}"><span class="glyphicon glyphicon-eye-open" title="View Entries"></span><span class="mname"> View Entries</span> </a></li>
                    <li><a href="{{ url('/articles/create') }}"><span class="glyphicon glyphicon-plus" title="Add Entry"></span> <span class="mname"> Add Entry</span></a></li>
                    <li><a href="{{ url('/events') }}"><span class="glyphicon glyphicon-calendar" title="Schedule"></span><span class="mname"> Schedule</span> </a></li>
                    <li><a href="{{ url('/progress') }}"><span class="glyphicon glyphicon-stats" title="Progression"></span><span class="mname"> Progression</span> </a></li>
                </ul>



                @endif

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Log in</a></li>
                        <li><a href="{{ url('/register') }}">Sign up</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-btn fa-user" title="User"></i>{{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/settings') }}"><i class="fa fa-btn fa-cog"></i>Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>



    @yield('content')

    <!-- JavaScripts -->



  

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"   integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw="   crossorigin="anonymous"></script>
<script src="{{ URL::to('js/lib/moment.min.js') }}"></script>
<script src="{{ URL::to('js/fullcalendar.js') }}"></script>
<script src="{{ URL::to('js/jquery.datetimepicker.full.min.js') }}"></script>
<script src="{{ URL::to('js/select2.full.min.js')}}"></script>

<script src="{{ URL::to('js/bootstrap-toggle.min.js')}}"></script>
<script src="{{ URL::to('js/app.js') }}"></script>
<script src="{{ URL::to('js/ajax.js') }}"></script>


    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>

</html>
