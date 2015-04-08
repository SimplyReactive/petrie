@extends('layouts.default')

@section('style')
<style>
    div.page-header:nth-child(n+2) {
        padding-top: 50px;
    }
</style>
@endsection

@section('content')
    <div class="page-header" id="buttons">
        <h1>Buttons</h1>
        <button type="button" class="btn btn-xs btn-default" data-gist="45e83a87cf59155db51d">Show code sample</button>
    </div>
    <div class="gist hidden" id="45e83a87cf59155db51d">
        <script src="https://gist.github.com/atroxmavenia/45e83a87cf59155db51d.js"></script>
    </div>
    <p>
        <button type="button" class="btn btn-lg btn-brand">Brand</button>
        <button type="button" class="btn btn-lg btn-default">Default</button>
        <button type="button" class="btn btn-lg btn-primary">Primary</button>
        <button type="button" class="btn btn-lg btn-success">Success</button>
        <button type="button" class="btn btn-lg btn-info">Info</button>
        <button type="button" class="btn btn-lg btn-warning">Warning</button>
        <button type="button" class="btn btn-lg btn-danger">Danger</button>
        <button type="button" class="btn btn-lg btn-link">Link</button>
    </p>
    <p>
        <button type="button" class="btn btn-brand">Brand</button>
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-link">Link</button>
    </p>
    <p>
        <button type="button" class="btn btn-sm btn-brand">Brand</button>
        <button type="button" class="btn btn-sm btn-default">Default</button>
        <button type="button" class="btn btn-sm btn-primary">Primary</button>
        <button type="button" class="btn btn-sm btn-success">Success</button>
        <button type="button" class="btn btn-sm btn-info">Info</button>
        <button type="button" class="btn btn-sm btn-warning">Warning</button>
        <button type="button" class="btn btn-sm btn-danger">Danger</button>
        <button type="button" class="btn btn-sm btn-link">Link</button>
    </p>
    <p>
        <button type="button" class="btn btn-xs btn-brand">Brand</button>
        <button type="button" class="btn btn-xs btn-default">Default</button>
        <button type="button" class="btn btn-xs btn-primary">Primary</button>
        <button type="button" class="btn btn-xs btn-success">Success</button>
        <button type="button" class="btn btn-xs btn-info">Info</button>
        <button type="button" class="btn btn-xs btn-warning">Warning</button>
        <button type="button" class="btn btn-xs btn-danger">Danger</button>
        <button type="button" class="btn btn-xs btn-link">Link</button>
    </p>


    <div class="page-header" id="standardForm">
        <h1>Standard Form</h1>
    </div>
    {!! Form::open(['nosubmit']) !!}
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-8">
                        <label class="control-label" for="inputExample">Input Example</label>
                        <input class="form-control" name="inputExample" type="text" />
                        <p class="help-block">Input Example help text</p>
                    </div>
                    <div class="col-sm-4 selectContainer">
                        <label class="control-label" for="selectExample">Select Example</label>
                        <select class="form-control" name="selectExample">
                            <option value="">Choose an option</option>
                            <option value="">Option One</option>
                            <option value="">Option Two</option>
                            <option value="">Option Three</option>
                            <option value="">Option Four</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="textareaExample">Textarea Example</label>
                <textarea class="form-control" name="textareaExample" rows="8"></textarea>
                <p class="help-block">Textarea Example help text</p>
            </div>
            <div class="form-group">
                <label class="control-label">Radio Example</label>
                <div>
                    <label class="radio-inline">
                        <input name="radioExample" value="terrible" type="radio" /> Radio One
                    </label>
                    <label class="radio-inline">
                        <input name="radioExample" value="watchable" type="radio" /> Radio Two
                    </label>
                    <label class="radio-inline">
                        <input name="radioExample" value="best" type="radio" /> Radio Three
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}


    <div class="page-header" id="inlineForm">
        <h1>Inline Form</h1>
    </div>
    <form class="form-inline">
        <div class="form-group">
            <label for="inlineFormName">Name</label>
            <input class="form-control" name="inlineFormName" placeholder="Some Name" type="text" />
        </div>
        <div class="form-group">
            <label for="inlineFormEmail">Email</label>
            <input class="form-control" name="inlineFormEmail" placeholder="some.email@example.com" type="email" />
        </div>
        <button class="btn btn-default" type="submit">Submit</button>
    </form>


    <div class="page-header" id="horizontalForm">
        <h1>Horizontal Form</h1>
    </div>
    <form class="form-horizontal" nosubmit>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="horizontalFormEmail">Email</label>
            <div class="col-sm-10">
                <input class="form-control" name="horizontalFormEmail" placeholder="Email" type="email" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="horizontalFormPassword">Password</label>
            <div class="col-sm-10">
                <input class="form-control" name="horizontalFormPassword" placeholder="Password" type="password" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" /> Remember me
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-default" type="submit">Sign in</button>
            </div>
        </div>
    </form>


    <div class="page-header" id="tables">
        <h1>Tables</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td rowspan="2">1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@TwBootstrap</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table table-condensed table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="page-header" id="labels">
        <h1>Labels</h1>
    </div>
    <h1>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
    </h1>
    <h2>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
    </h2>
    <h3>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
    </h3>
    <h4>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
    </h4>
    <h5>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
    </h5>
    <h6>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
    </h6>
    <p>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
    </p>


    <div class="page-header" id="badges">
        <h1>Badges</h1>
    </div>
    <p>
        <a href="#!">Inbox <span class="badge">42</span></a>
    </p>
    <ul class="nav nav-pills" role="tablist">
        <li role="presentation" class="active"><a href="#!">Home <span class="badge">42</span></a></li>
        <li role="presentation"><a href="#!">Profile</a></li>
        <li role="presentation"><a href="#!">Messages <span class="badge">3</span></a></li>
    </ul>


    <div class="page-header" id="dropdownMenus">
        <h1>Dropdown menus</h1>
    </div>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
            Dropdown
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
        </ul>
    </div>
    <div class="dropup">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
            Dropup
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
        </ul>
    </div>


    <div class="page-header" id="navs">
        <h1>Navs</h1>
    </div>
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#!">Home</a></li>
        <li role="presentation"><a href="#!">Profile</a></li>
        <li role="presentation"><a href="#!">Messages</a></li>
    </ul>
    <ul class="nav nav-pills" role="tablist">
        <li role="presentation" class="active"><a href="#!">Home</a></li>
        <li role="presentation"><a href="#!">Profile</a></li>
        <li role="presentation"><a href="#!">Messages</a></li>
    </ul>


    <div class="page-header" id="navBars">
        <h1>Navbars</h1>
    </div>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#!">Project name</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#!">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#!">Action</a></li>
                            <li><a href="#!">Another action</a></li>
                            <li><a href="#!">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#!">Separated link</a></li>
                            <li><a href="#!">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#!">Project name</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#!">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#!">Action</a></li>
                            <li><a href="#!">Another action</a></li>
                            <li><a href="#!">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#!">Separated link</a></li>
                            <li><a href="#!">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>


    <div class="page-header" id="alerts">
        <h1>Alerts</h1>
    </div>
    <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> You successfully read this important alert message.
    </div>
    <div class="alert alert-info" role="alert">
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
    </div>
    <div class="alert alert-warning" role="alert">
        <strong>Warning!</strong> Best check yo self, you're not looking too good.
    </div>
    <div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
    </div>


    <div class="page-header" id="progressBars">
        <h1>Progress bars</h1>
    </div>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span></div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%<span class="sr-only">40% Complete (success)</span></div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span></div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span></div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span></div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete</span></div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete</span></div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
        <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
        <div class="progress-bar progress-bar-danger" style="width: 10%"><span class='sr-only'>10% Complete (danger)</span></div>
    </div>


    <div class="page-header" id="listGroups">
        <h1>List groups</h1>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
            <div class="list-group">
                <a href="#!" class="list-group-item active">
                    Cras justo odio
                </a>
                <a href="#!" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#!" class="list-group-item">Morbi leo risus</a>
                <a href="#!" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#!" class="list-group-item">Vestibulum at eros</a>
            </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
            <div class="list-group">
                <a href="#!" class="list-group-item active">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a href="#!" class="list-group-item">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a href="#!" class="list-group-item">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
            </div>
        </div><!-- /.col-sm-4 -->
    </div>


    <div class="page-header" id="panels">
        <h1>Panels</h1>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div><!-- /.col-sm-4 -->
    </div>


    <div class="page-header" id="wells">
        <h1>Wells</h1>
    </div>
    <div class="well">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>


    <div class="page-header" id="thumbNails">
        <h1>Thumbnails</h1>
    </div>
    <img data-src="holder.js/200x200/random/auto" class="img-thumbnail" />
    <img data-src="holder.js/200x200/random/auto" class="img-thumbnail img-circle" />
    <img data-src="holder.js/200x200/random/auto" class="img-thumbnail" />
    <img data-src="holder.js/200x200/random/auto" class="img-thumbnail img-circle" />
    <img data-src="holder.js/200x200/random/auto" class="img-thumbnail" />
    <img data-src="holder.js/200x200/random/auto" class="img-thumbnail img-circle" />
    <img data-src="holder.js/200x200/random/auto" class="img-thumbnail" />
    <img data-src="holder.js/200x200/random/auto" class="img-thumbnail img-circle" />
    <img data-src="holder.js/200x200/random/auto" class="img-thumbnail" />
    <img data-src="holder.js/200x200/random/auto" class="img-thumbnail img-circle" />


    <div class="page-header" id="bootstrapCarousel">
        <h1>Bootstrap Carousel</h1>
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img data-src="holder.js/1140x500/auto/#00aeef:#FFFFFF/text:First slide" alt="First slide">
            </div>
            <div class="item">
                <img data-src="holder.js/1140x500/auto/#ef9d00:#ffe1a9/text:Second slide" alt="Second slide">
            </div>
            <div class="item">
                <img data-src="holder.js/1140x500/auto/#0027ef:#92a4ff/text:Third slide" alt="Third slide">
            </div>
            <div class="item">
                <img data-src="holder.js/1140x500/auto/#006227:#58f095/text:Fourth slide" alt="Fourth slide">
            </div>
            <div class="item">
                <img data-src="holder.js/1140x500/auto/#720000:#d4a2a2/text:Fifth slide" alt="Fifth slide">
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="page-header" id="owlCarouselStandard">
        <h1>Owl Carousel (Standard) <small><a href="http://owlgraphic.com/owlcarousel/" target="_blank">http://owlgraphic.com/owlcarousel</a></small></h1>
        <button type="button" class="btn btn-xs btn-default" data-gist="ace83c433a546d8ad2a5">Show code sample</button>
    </div>
    <div class="gist hidden" id="ace83c433a546d8ad2a5">
        <script src="https://gist.github.com/atroxmavenia/ace83c433a546d8ad2a5.js"></script>
    </div>
    <div class="owl-carousel" style="max-width:100%;overflow:hidden;">
        <div><img class="img-responsive" data-src="holder.js/1140x500/auto/#00aeef:#FFFFFF/text:First slide" alt="First slide"></div>
        <div><img class="img-responsive" data-src="holder.js/1140x500/auto/#ef9d00:#ffe1a9/text:Second slide" alt="Second slide"></div>
        <div><img class="img-responsive" data-src="holder.js/1140x500/auto/#0027ef:#92a4ff/text:Third slide" alt="Third slide"></div>
        <div><img class="img-responsive" data-src="holder.js/1140x500/auto/#006227:#58f095/text:Fourth slide" alt="Fourth slide"></div>
        <div><img class="img-responsive" data-src="holder.js/1140x500/auto/#720000:#d4a2a2/text:Fifth slide" alt="Fifth slide"></div>
    </div>


</div>
    <div class="page-header" id="owlCarouselFull">
        <h1>Owl Carousel (Full) <small><a href="http://owlgraphic.com/owlcarousel/" target="_blank">http://owlgraphic.com/owlcarousel</a></small></h1>
    </div>
    <div class="owl-carousel" style="max-width:100%;overflow:hidden;">
        <div><img class="img-responsive" data-src="holder.js/1940x500/auto/#00aeef:#FFFFFF/text:First slide" alt="First slide"></div>
        <div><img class="img-responsive" data-src="holder.js/1940x500/auto/#ef9d00:#ffe1a9/text:Second slide" alt="Second slide"></div>
        <div><img class="img-responsive" data-src="holder.js/1940x500/auto/#0027ef:#92a4ff/text:Third slide" alt="Third slide"></div>
        <div><img class="img-responsive" data-src="holder.js/1940x500/auto/#006227:#58f095/text:Fourth slide" alt="Fourth slide"></div>
        <div><img class="img-responsive" data-src="holder.js/1940x500/auto/#720000:#d4a2a2/text:Fifth slide" alt="Fifth slide"></div>
    </div>
<div class="container">


    <div class="page-header" id="typeahead">
        <h1>Twitter typeahead.js and Bloodhound <small><a href="http://twitter.github.io/typeahead.js/" target="_blank">http://twitter.github.io/typeahead.js/</a></small></h1>
    </div>
    <div id="form-group">
        <input id="typeahead" class="form-control" type="text" placeholder="Countries">
    </div>


    <div class="page-header" id="editables">
        <h1>Editables <small><a href="http://vitalets.github.io/x-editable" target="_blank">http://vitalets.github.io/x-editable</a></small></h1>
    </div>
    <table class="table table-bordered table-striped table-responsive">
        <tbody>
        <tr>
            <td>Simple text field</td>
            <td><a href="#!" class="xeditable" data-type="text" data-title="Enter username">superuser</a></td>
        </tr>
        <tr>
            <td>Empty text field, required</td>
            <td><a href="#!" class="xeditable-required" data-type="text" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></td>
        </tr>
        <tr>
            <td>Select, local array, custom display</td>
            <td><a href="#!" id="select-editable" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
        </tr>
        </tbody>
    </table>


    <div class="page-header" id="tokenfield">
        <h1>Tokenfield <small><a href="http://sliptree.github.io/bootstrap-tokenfield" target="_blank">http://sliptree.github.io/bootstrap-tokenfield</a></small></h1>
    </div>
    <input type="text" class="form-control" id="tokenfield-typeahead" value="red,green,blue" />


    <div class="page-header" id="notify">
        <h1>Bootstrap Notify <small><a href="http://bootstrap-growl.remabledesigns.com" target="_blank">http://bootstrap-growl.remabledesigns.com</a></small></h1>
        <button type="button" class="btn btn-xs btn-default" data-gist="450c0e7704e9edc1486b">Show code sample</button>
    </div>
    <div class="gist hidden" id="450c0e7704e9edc1486b">
        <script src="https://gist.github.com/atroxmavenia/450c0e7704e9edc1486b.js"></script>
    </div>
    <button class="btn btn-success" type="button" data-type="growl" data-style="success"
            data-title="Sample" data-message="An example of a growl-like notification.">Trigger Notification</button>
    <button class="btn btn-info" type="button" data-type="growl" data-style="info"
            data-title="Sample" data-message="An example of a growl-like notification.">Trigger Notification</button>
    <button class="btn btn-warning" type="button" data-type="growl" data-style="warning"
            data-title="Sample" data-message="An example of a growl-like notification.">Trigger Notification</button>
    <button class="btn btn-danger" type="button" data-type="growl" data-style="danger"
            data-title="Sample" data-message="An example of a growl-like notification.">Trigger Notification</button>


    <div class="page-header" id="bootstrapTables">
        <h1>Bootstrap Tables <small><a href="http://bootstrap-table.wenzhixin.net.cn/" target="_blank">http://bootstrap-table.wenzhixin.net.cn</a></small></h1>
        <button type="button" class="btn btn-xs btn-default" data-gist="756e70e4c64c504f3d9c">Show code sample</button>
    </div>
    <div class="gist hidden" id="756e70e4c64c504f3d9c">
        <script src="https://gist.github.com/atroxmavenia/756e70e4c64c504f3d9c.js"></script>
    </div>
    <table data-toggle="table"
           data-search="true"
           data-show-refresh="true"
           data-show-toggle="true"
           data-show-columns="true"
           data-show-export="true"
           data-show-pagination-switch="true"
           data-pagination="true"
           data-show-footer="true"
           data-url="/data/table-data.json">
        <thead>
        <tr>
            <th data-sortable="true" data-field="name">Name</th>
            <th data-sortable="true" data-field="employees">Employees</th>
            <th data-field="phoneNumber">Phone Number</th>
            <th data-field="street">Street Address</th>
            <th data-sortable="true" data-field="city">City</th>
            <th data-sortable="true" data-field="state">State</th>
            <th data-sortable="true" data-field="description">Description</th>
        </tr>
        </thead>
    </table>


    <br/><br/>
@endsection

@section('script')
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?autoload=true"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.5.2/holder.min.js"></script>
<script>
var animations = ["bounce", "flash", "pulse", "rubberBand", "shake", "swing", "tada", "wobble", "flip"];
var entrances = [
    "bounceIn", "bounceInDown", "bounceInLeft", "bounceInRight", "bounceInUp", "rollIn",
    "fadeIn", "fadeInDown", "fadeInDownBig", "fadeInLeft", "fadeInLeftBig", "fadeInRight", "fadeInRightBig", "fadeInUp", "fadeInUpBig",
    "flipInX", "flipInY", "lightSpeedIn", "rotateIn", "rotateInDownLeft", "rotateInDownRight", "rotateInUpLeft", "rotateInUpRight",
    "slideInUp", "slideInDown", "slideInLeft", "slideInRight", "zoomIn", "zoomInDown", "zoomInLeft", "zoomInRight", "zoomInUp",
];
var exits = [
    "bounceOut", "bounceOutDown", "bounceOutLeft", "bounceOutRight", "bounceOutUp", "rollOut",
    "fadeOut", "fadeOutDown", "fadeOutDownBig", "fadeOutLeft", "fadeOutLeftBig", "fadeOutRight", "fadeOutRightBig", "fadeOutUp", "fadeOutUpBig",
    "flipOutX", "flipOutY", "lightSpeedOut", "rotateOut", "rotateOutDownLeft", "rotateOutDownRight", "rotateOutUpLeft", "rotateOutUpRight",
    "slideOutUp", "slideOutDown", "slideOutLeft", "slideOutRight", "zoomOut", "zoomOutDown", "zoomOutLeft", "zoomOutRight", "zoomOutUp",
];
function animateEl(el, anim, show) {
    anim = exits[Math.floor(Math.random()*exits.length)];
    if(show)
        anim = entrances[Math.floor(Math.random()*entrances.length)];
    el.removeClass().addClass(anim + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        el.removeClass();
        if(!show)
            el.addClass('hidden');
    });
};

$(document).ready(function(){
    // Disable form submits
    $('form').submit(function(e){
        if($(this).is('[nosubmit]')) {
            e.preventDefault();
            return false;
        }
    });


    $('[data-gist]').click(function(){
        var gist = $('#'+$(this).data('gist'));
        if(gist.is(':visible')) {
            $(this).html('Show code sample');
            animateEl(gist, 'flipOutX', false);
        }
        else {
            $(this).html('Hide code sample');
            animateEl(gist, 'flipInX', true);
        }
    });


    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true
    });

    /*
     * X-Editable
     */
    $('#select-editable').editable({
        prepend: "not selected",
        source: [
            {value: 1, text: 'Value 1'},
            {value: 2, text: 'Value 2'},
            {value: 3, text: 'Value 3'},
            {value: 4, text: 'Value 4'}
        ],
        display: function(value, sourceData) {
            var colors = {"": "gray", 1: "green", 2: "blue", 3: "red", 4: "purple"},
                    elem = $.grep(sourceData, function(o){return o.value == value;});

            if(elem.length)
                $(this).text(elem[0].text).css("color", colors[value]);
            else
                $(this).empty();
        }
    });

    /*
     * Typeahead and Bloodhound with prefetch
     */
    var countries = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        limit: 10,
        prefetch: {
            url: 'data/countries.json',
            filter: function(list) {
                return $.map(list, function(country) { return { name: country }; });
            }
        }
    });
    // kicks off the loading/processing of `local` and `prefetch`
    countries.initialize();
    // passing in `null` for the `options` arguments will result in the default
    // options being used
    $('#typeahead').typeahead(null, {
        hint: true,
        highlight: true,
        name: 'countries',
        displayKey: 'name',
        // `ttAdapter` wraps the suggestion engine in an adapter that
        // is compatible with the typeahead jQuery plugin
        source: countries.ttAdapter()
    });


    /*
     * Tokenfield using Typeahead/Bloodhound
     */
    $('.tokenfield').tokenfield()
    var engine = new Bloodhound({
        local: [{value: 'red'}, {value: 'blue'}, {value: 'green'} , {value: 'yellow'}, {value: 'violet'}, {value: 'brown'}, {value: 'purple'}, {value: 'black'}, {value: 'white'}],
        datumTokenizer: function(d) {
            return Bloodhound.tokenizers.whitespace(d.value);
        },
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });
    engine.initialize();
    $('#tokenfield-typeahead').tokenfield({
        typeahead: [null, { source: engine.ttAdapter() }]
    });

    /*
     * Bootstrap Notifications
     */
    $('[data-type=growl]').click(function(){
        $.notify({
            title: '<strong>'+ $(this).data('title') +'</strong>',
            message: $(this).data('message')
        }, {
            type: $(this).data('style'),
            newest_on_top: true,
            animate: {
                enter: 'animated flipInY',
                exit: 'animated flipOutX'
            }
        });
    });
});
</script>
@endsection