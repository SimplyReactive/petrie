<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Simply Reactive">

    <title>L5Boot</title>

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
            <a class="navbar-brand" href="{{ route('index') }}">L5Boot</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('examples') }}">Examples</a></li>
                <li><a href="{{ route('admin') }}">ACP</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li class="dropdown">
                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Action</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Header</li>
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Action</a></li>
                    </ul>
                </li>
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