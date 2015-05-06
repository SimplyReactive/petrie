@extends('layouts.admin')

@section('style')
@endsection

@section('pageTitle', 'Dashboard')
@section('pageSummary', 'A summary of recent activity')

@section('content')

    <!-- /. ROW  -->
    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-left pull-left green">
                    <svg class="svg-stats-bars2"><use xlink:href="#svg-stats-bars2"></use></svg>
                </div>
                <div class="panel-right pull-right">
                    <h3>8,457</h3>
                    <strong> Daily Visits</strong>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-blue">
                <div class="panel-left pull-left blue">
                    <svg class="svg-cart"><use xlink:href="#svg-cart"></use></svg>
                </div>
                <div class="panel-right pull-right">
                    <h3>52,160 </h3>
                    <strong> Sales</strong>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-red">
                <div class="panel-left pull-left red">
                    <svg class="svg-bubbles10"><use xlink:href="#svg-bubbles10"></use></svg>
                </div>
                <div class="panel-right pull-right">
                    <h3>15,823 </h3>
                    <strong> Comments </strong>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-brown">
                <div class="panel-left pull-left brown">
                    <svg class="svg-users"><use xlink:href="#svg-users"></use></svg>
                </div>
                <div class="panel-right pull-right">
                    <h3>36,752 </h3>
                    <strong>No. of Visits</strong>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tasks Panel
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <span class="badge">7 minutes ago</span>
                            <span class="fa fa-fw fa-comment"></span> Commented on a post
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">16 minutes ago</span>
                            <span class="fa fa-fw fa-truck"></span> Order 392 shipped
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">36 minutes ago</span>
                            <span class="fa fa-fw fa-globe"></span> Invoice 653 has paid
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">1 hour ago</span>
                            <span class="fa fa-fw fa-user"></span> A new user has been added
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">1.23 hour ago</span>
                            <span class="fa fa-fw fa-user"></span> A new user has added
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">yesterday</span>
                            <span class="fa fa-fw fa-globe"></span> Saved the world
                        </a>
                    </div>
                    <div class="text-right">
                        <a href="#">More Tasks <span class="fa fa-arrow-circle-right"></span></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Responsive Table Example
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User Name</th>
                                <th>Email ID.</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>John15482</td>
                                <td>name@site.com</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kimsila</td>
                                <td>Marriye</td>
                                <td>Kim1425</td>
                                <td>name@site.com</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Rossye</td>
                                <td>Nermal</td>
                                <td>Rossy1245</td>
                                <td>name@site.com</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Richard</td>
                                <td>Orieal</td>
                                <td>Rich5685</td>
                                <td>name@site.com</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Jacob</td>
                                <td>Hielsar</td>
                                <td>Jac4587</td>
                                <td>name@site.com</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Wrapel</td>
                                <td>Dere</td>
                                <td>Wrap4585</td>
                                <td>name@site.com</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. ROW  -->
@endsection

@section('script')
@endsection