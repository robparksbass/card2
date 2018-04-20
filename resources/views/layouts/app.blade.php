<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Asheville Membership Briefcase - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @role('administrator')
    @include('includes.nav.manage')
    @endrole
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                
                @guest
                <a class="navbar-brand" href="{{ url('/') }}">
                    Asheville Membership Briefcase
                </a>
                @else
                <a class="navbar-brand" href="{{ url('home') }}">
                    Asheville Membership Briefcase
                </a>
                @endguest


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @role('administrator')Administrator:@endrole
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @role('administrator')
                                    <a class="dropdown-item" href="{{ route('manage.dashboard') }}">
                                        <i class="fa fa-cog"></i>
                                        &nbsp;Manage
                                    </a>
                                    @endrole
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        <i class="fa fa-briefcase"></i>    
                                        &nbsp;Briefcase Portal
                                    </a>

                                    <a class="dropdown-item" href="{{ route('cards') }}">
                                        <i class="fa fa-address-card"></i>    
                                        &nbsp;Cards
                                    </a>

                                    <a class="dropdown-item" href="{{ route('add') }}">
                                        <i class="fa fa-plus-square"></i>
                                        &nbsp;Add a Card
                                    </a>                                                                        
                                    <a class="dropdown-item" href="{{ route('businesses') }}">                                        
                                        <i class="fa fa-building"></i>
                                        &nbsp;Businesses
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-times-circle"></i>
                                        &nbsp;Logout
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>