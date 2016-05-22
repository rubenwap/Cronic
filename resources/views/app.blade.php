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


    <style>
    
    .additions {
        border-radius: 50%;
             
    }
    
    .additions:hover {
         box-shadow: 5px 5px 2px #888888;
    }
    
    .btn-primary {
        background-color: #B3A3AB;
        border-color: #B3A3AB;
        margin-left: 2em;
               
    }
    

    
    .navbar {
    background-color:#223312 !important;
    }
    
 
    .navbar-default .navbar-toggle .icon-bar {
    background-color: #FFFFFF !important;
}
    
    .panel-heading {
            background-color:#96BB68 !important;
            font-size: 1.5em;
            font-weight: light; 
            
           
    }
    
    .panel-default {
        border-color: #96BB68 !important;
    }

    
        body {
            font-family: 'Lato';
            background-color: #CAD991;
        }

        .fa-btn {
            margin-right: 6px;
        }

        .navbar-brand {
            font-family: 'Lobster';
            font-size: 2em;
        }

        .logotext {
          font-family: 'Lobster';
          color: #FFFFFF;
        }

.callout {
  color: #333333;
}
        .navbar-toggle {
            float: left;
            margin-left: 1em;
        }

#btnfind {
  background-color: #FFFFFF;
  color: white;
}

.carousel-caption {
  color: black;
}

.navbar-brand {
  color:#FFFFFF !important;
}
#app-layout > nav > div > ul > li > a {
  color:#FFFFFF;
}



#f {
  display:none;
}

#doctor {
  display:none;
}

#allergies {
  display:none;
}

.item {
  margin-left: 5em;
}


.imgIndex{

margin-top: 2em;

}
.textFeeling {
  display:none;
}

.indexEntries{
  border: solid 1px;
  border-color: #ddd;
  border-radius:5px;

    width: auto;
}

.imgIndex {
  margin-bottom: 2em;
}


@media (min-width: 768px) {
  .mname {
      display:none;
  }
  
  
  .navbar-collapse {
    height: 100px;
    border-top: 0;
    box-shadow: none;
    max-height: none;
    padding-left:0;
    padding-right:0;
  }
  .navbar-collapse.collapse {
    display: block !important;
    width: 100px !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-x: visible;
  }

.navbar
{
	max-width:100px;
	margin-right: 0;
	margin-left: 0;
  float:left;
  position: absolute;
  height:100%;
background-color:#223312 !important;
}

.navbar-nav,
.navbar-nav > li,
.navbar-left,
.navbar-right,
.navbar-header
{float:none !important;


}

.navbar-right .dropdown-menu {left:0;right:auto;}
.navbar-collapse .navbar-nav.navbar-right:last-child {
    margin-right: 0;
}


.panel {
  box-shadow: 5px 5px 2px #888888;
  margin-top:1em;
}

.glyphicon {
    font-size: 20px;
}

#btnfind {
    color: #223312 !important;
    border-radius: 10px;
    box-shadow: 5px 5px 2px #888888;
    
}



}
    </style>
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



  </body>

    </html>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
<script src="{{ URL::to('js/lib/moment.min.js') }}"></script>
<script src="{{ URL::to('js/fullcalendar.js') }}"></script>
<script src="{{ URL::to('js/jquery.datetimepicker.full.min.js') }}"></script>
<script src="{{ URL::to('js/select2.full.min.js')}}"></script>
<script src="{{ URL::to('js/app.js') }}"></script>


    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
