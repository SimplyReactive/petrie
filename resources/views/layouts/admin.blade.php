<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Simply Reactive">

    <title>Petri Administration</title>

    <link href="{{ elixir('css/admin.css') }}" rel="stylesheet">
    @yield('style')
</head>

<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('admin') }}">Petri Administration</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <svg class="svg-envelope"><use xlink:href="#svg-envelope"></use></svg>
                    <svg class="svg-triangle-down"><use xlink:href="#svg-triangle-down"></use></svg>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                            </div>
                            <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <svg class="svg-arrow-right"><use xlink:href="#arrow-right"></use></svg>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <svg class="svg-bell"><use xlink:href="#svg-bell"></use></svg>
                    <svg class="svg-triangle-down"><use xlink:href="#svg-triangle-down"></use></svg>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <svg class="svg-comment"><use xlink:href="#svg-comment"></use></svg> New Comment
                                <span class="pull-right text-muted small">4 min</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <svg class="svg-twitter"><use xlink:href="#svg-twitter"></use></svg> 3 New Followers
                                <span class="pull-right text-muted small">12 min</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <svg class="svg-envelope"><use xlink:href="#svg-envelope"></use></svg> Message Sent
                                <span class="pull-right text-muted small">4 min</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <svg class="svg-clipboard"><use xlink:href="#svg-clipboard"></use></svg> New Task
                                <span class="pull-right text-muted small">4 min</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <svg class="svg-reboot"><use xlink:href="#svg-reboot"></use></svg> Server Rebooted
                                <span class="pull-right text-muted small">4 min</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <svg class="svg-arrow-right"><use xlink:href="#arrow-right"></use></svg>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <svg class="svg-user"><use xlink:href="#svg-user"></use></svg>
                    <svg class="svg-triangle-down"><use xlink:href="#svg-triangle-down"></use></svg>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><span class="fa fa-user fa-fw"></span> User Profile</a></li>
                    <li><a href="#"><span class="fa fa-gear fa-fw"></span> Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><span class="fa fa-sign-out fa-fw"></span> Logout</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>

    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li><a href="{{ route('admin') }}"><svg class="svg svg-meter"><use xlink:href="#svg-meter"></use></svg> Dashboard</a></li>
                <li><a href="{{ route('admin.svg') }}"><svg class="svg svg-svg"><use xlink:href="#svg-svg"></use></svg> SVG Icons</a></li>
                <li><a href="{{ route('admin.users') }}"><svg class="svg svg-users"><use xlink:href="#svg-users"></use></svg> Users</a></li>
                <li>
                    <a href="#">
                        <svg class="svg svg-bar-graph"><use xlink:href="#svg-bar-graph"></use></svg> Charts
                        <svg class="svg-arrow-down2 pull-right"><use xlink:href="#svg-arrow-down2"></use></svg>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="#">Chart.js</a></li>
                        <li><a href="{{ route('admin.easypie') }}">Easy-Pie-Chart</a></li>
                        <li><a href="{{ route('admin.morris') }}">Morris</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <svg class="svg svg-lifebuoy"><use xlink:href="#svg-lifebuoy"></use></svg> Development Guides
                        <svg class="svg-arrow-down2 pull-right"><use xlink:href="#svg-arrow-down2"></use></svg>
                    </a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ route('admin.guide.frontend') }}">Front-end</a></li>
                        <li><a href="{{ route('admin.guide.backend') }}">Back-end</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        @yield('pageTitle') <small>@yield('pageSummary')</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Library</a></li>
                        <li class="active">Data</li>
                    </ol>
                </div>
            </div>

            @yield('content')
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->

<footer class="footer">
    <div class="container">
        <p class="text-muted">Copyright &copy; 2015 <a href="#!">Simply Reactive</a>.</p>
    </div>
</footer>

<script src="{{ elixir('js/vendor.js') }}"></script>
<script src="{{ elixir('js/custom.js') }}"></script>
<script src="{{ elixir('js/admin.js') }}"></script>
@yield('script')
</body>
</html>