<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Simply Reactive">

    <title>Petrie</title>

    <link href="{{ elixir('css/style.css') }}" rel="stylesheet">
@yield('style')
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">Petrie</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                @if (Sentry::check())
                <li class="dropdown">
                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Session::get('email') }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
                            <li class="dropdown-header">Administration</li>
                            <li><a href="{{ route('admin') }}">Dashboard</a></li>
                            <li class="divider"></li>
                        @endif
                        <li class="dropdown-header">My Account</li>
                        <li {{ (Request::is('profile') ? 'class="active"' : '') }}><a href="{{ route('sentinel.profile.show') }}">Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('sentinel.logout') }}">Logout</a></li>
                    </ul>
                </li>
                @else
                <li {{ (Request::is('login') ? 'class="active"' : '') }}><a href="{{ route('sentinel.login') }}">Login</a></li>
                <li {{ (Request::is('users/create') ? 'class="active"' : '') }}><a href="{{ route('sentinel.register.form') }}">Register</a></li>
                @endif

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Begin page content -->
<div class="container">
    @yield('content')
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">Copyright &copy; 2015 <a href="#!">Simply Reactive</a>.</p>
    </div>
</footer>


<script src="{{ elixir('js/vendor.js') }}"></script>
<script src="{{ elixir('js/custom.js') }}"></script>
@yield('script')
</body>
</html>