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
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
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
<div id="loader" style="display:none;"></div>

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
                    <li><a href="{{ url('/home') }}"><i class="fa fa-home fa-2x" aria-hidden="true" title="Home"></i><span class="mname"> Home</span></a></li>
                                      @if (Auth::user()->isdoctor === "no")

                                        <li><a href="{{ url('/articles/create') }}"><i class="fa fa-plus-circle fa-2x" aria-hidden="true" title="Add Entry"></i><span class="mname"> Add Entry</span></a></li>
@endif
                    <li><a href="{{ url('/events/create') }}"><i class="fa fa-calendar-plus-o fa-2x" aria-hidden="true" title="Add Event"></i><span class="mname"> Add Event</span> </a></li>
                  @if (Auth::user()->isdoctor === "no")

                    <li><a href="{{ url('/articles') }}"><i class="fa fa-eye fa-2x" aria-hidden="true" title="View Entries"></i><span class="mname"> View Entries</span> </a></li>
@endif
                    <li><a href="{{ url('/events') }}"><i class="fa fa-calendar fa-2x" aria-hidden="true" title="View Events"></i><span class="mname"> View Events</span> </a></li>
                        @if (Auth::user()->isdoctor === "no")

                    <li><a href="{{ url('/progress') }}"><i class="fa fa-bar-chart fa-2x" aria-hidden="true" title="Progress"></i><span class="mname"> Progress</span> </a></li>
@endif
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
                                              @if (Auth::user()->isdoctor === "no")

                            <li><a href="{{ url('/settings') }}"><i class="fa fa-btn fa-cog"></i>Profile</a></li>
                            @endif
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
<script src="{{ URL::to('js/bootbox.min.js')}}"></script>

<script src="{{ URL::to('js/app.js') }}"></script>
<script src="{{ URL::to('js/ajax.js') }}"></script>


    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>

</html>
