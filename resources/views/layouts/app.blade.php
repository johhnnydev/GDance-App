</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/css/font-awesome.min.css') }}">
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white border">
    <a class="navbar-brand text-primary" href="{{ url('/') }}"><i class="fa fa-user icon-sidebar" aria-hidden="true"></i>AMA GUIDANCE</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
        @if(Auth::guest())
            <li class="nav-item">
                <a class="nav-link text-primary" href="{{ route('login') }}">Login</a>
            </li>
        @else
            @if(Auth::user()->is_admin == 1)
                <li class="nav-item text-primary">{{ ucfirst(Auth::user()->name) }} | Admin</li>
            @elseif(Auth::user()->is_admin == 2)
                <li class="nav-item text-primary">{{ ucfirst(Auth::user()->name) }} | Super Admin</li>
            @else
                <li class="nav-item text-primary">{{ ucfirst(Auth::user()->name) }} | Student</li
            @endif
            {{--  <li class="nav-item text-primary">{{ ucfirst(Auth::user()->name) }} {{ Auth::user()->is_admin == 1 ? ' | Admin' : ' | Student' }}</li>  --}}
        @endif
        </ul>
    </div>
</nav>
@if(Auth::guest())    
    @yield('content')
@else
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-white sidebar">
                <ul class="nav nav-pills flex-column">
                    {{-- student sidebar --}}
                    @if(Auth::user()->is_admin == False)
                        <li class="nav-item">                            
                            <a id="home" class="{{ Request::is('/') ? 'sb-nav nav-link color active' : 'sb-nav nav-link color' }}" href="{{ url('/') }}"><i class="fa fa-home icon-sidebar" aria-hidden="true"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="profile" class="{{ Request::is('profile') ? 'sb-nav nav-link color active' : 'sb-nav nav-link color' }}" href="{{ url('profile') }}"><i class="fa fa-user-circle icon-sidebar" aria-hidden="true"></i>Profile</a>
                        </li>
                        <li class="nav-item">
                            <a id="apts" class="{{ Request::is('studentappointments') ? 'sb-nav nav-link color active' : 'sb-nav nav-link color' }}" href="{{ url('studentappointments') }}"><i class="fa fa-calendar icon-sidebar" aria-hidden="true"></i>Appointments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out icon-sidebar" aria-hidden="true"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </li>
                    @else
                    {{-- admin sidebar --}}
                        <li class="nav-item">
                            <a class="{{ Request::is('/') ? 'nav-link color active' : 'nav-link color' }}" href="{{ url('/') }}"><i class="fa fa-home icon-sidebar" aria-hidden="true"></i>Dashboard</a> 
                            {{-- Dashboard --}}
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::is('register') ? 'nav-link color active' : 'nav-link color' }}" href="{{ url('register') }}"><i class="fa fa-user-circle icon-sidebar" aria-hidden="true"></i>Add User</a>
                            {{-- Add user --}}
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::is('violation/create') ? 'nav-link color active' : 'nav-link color' }}" href="{{ url('violation/create') }}"><i class="fa fa-plus-circle icon-sidebar" aria-hidden="true"></i>Add Violation</a>
                            {{-- Add violation --}}
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::is('report') ? 'nav-link color active' : 'nav-link color' }}" href="{{ url('report') }}"><i class="fa fa-area-chart icon-sidebar" aria-hidden="true"></i>Violation Report</a>
                            {{-- Monthy report --}}
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::is('absent/create') ? 'nav-link color active' : 'nav-link color' }}" href="{{ url('absent/create') }}"><i class="fa fa-plus-circle icon-sidebar" aria-hidden="true"></i>Add Absent</a>
                            {{-- Add Absents --}}
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::is('absentreport') ? 'nav-link color active' : 'nav-link color' }}" href="{{ url('absentreport') }}"><i class="fa fa-area-chart icon-sidebar" aria-hidden="true"></i>Absent Report</a>
                            {{-- ABsent report --}}
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::is('appointments') ? 'nav-link color active' : 'nav-link color' }}" href="{{ url('appointments') }}"><i class="fa fa-calendar icon-sidebar" aria-hidden="true"></i>Appointments</a>
                            {{-- Appointments --}}
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::is('message') ? 'nav-link color active' : 'nav-link color' }}" href="{{ url('message') }}"><i class="fa fa-paper-plane icon-sidebar" aria-hidden="true"></i>Message Someone</a>
                            {{-- Message someone --}}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out icon-sidebar" aria-hidden="true"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </li>
                    @endif
                </ul>      
            </nav> 
            {{-- main content --}}
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3 bg-light max" role="main">
                @yield('content')
            </main> 
        </div> {{-- end row --}}
    </div> {{-- end container --}}
@endif
</body>
</html>
