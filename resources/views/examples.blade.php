@extends('layouts.default')

@section('style')
<style>
    div.page-header:nth-child(n+2) {
        padding-top: 50px;
    }
    small {
        word-wrap: break-word;
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
        <input id="twtypeahead" class="form-control" type="text" placeholder="Countries">
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
            <th data-sortable="true" data-field="state">State</th>
            <th data-sortable="true" data-field="description">Description</th>
        </tr>
        </thead>
    </table>


    <div class="page-header" id="glyphicons">
        <h1>Glyphicons <small><a href="http://getbootstrap.com/components/#glyphicons" target="_blank">http://getbootstrap.com/components/#glyphicons</a></small></h1>
        <button type="button" class="btn btn-xs btn-default" data-gist="e6c5a43032ab99220721">Show code sample</button>
    </div>
    <div class="gist hidden" id="e6c5a43032ab99220721">
        <script src="https://gist.github.com/atroxmavenia/e6c5a43032ab99220721.js"></script>
    </div>
    <section style="font-size: 2em;">
        <span class="glyphicon glyphicon-asterisk"></span>
        <span class="glyphicon glyphicon-plus"></span>
        <span class="glyphicon glyphicon-euro"></span>
        <span class="glyphicon glyphicon-eur"></span>
        <span class="glyphicon glyphicon-minus"></span>
        <span class="glyphicon glyphicon-cloud"></span>
        <span class="glyphicon glyphicon-envelope"></span>
        <span class="glyphicon glyphicon-pencil"></span>
        <span class="glyphicon glyphicon-glass"></span>
        <span class="glyphicon glyphicon-music"></span>
        <span class="glyphicon glyphicon-search"></span>
        <span class="glyphicon glyphicon-heart"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-star-empty"></span>
        <span class="glyphicon glyphicon-user"></span>
        <span class="glyphicon glyphicon-film"></span>
        <span class="glyphicon glyphicon-th-large"></span>
        <span class="glyphicon glyphicon-th"></span>
        <span class="glyphicon glyphicon-th-list"></span>
        <span class="glyphicon glyphicon-ok"></span>
        <span class="glyphicon glyphicon-remove"></span>
        <span class="glyphicon glyphicon-zoom-in"></span>
        <span class="glyphicon glyphicon-zoom-out"></span>
        <span class="glyphicon glyphicon-off"></span>
        <span class="glyphicon glyphicon-signal"></span>
        <span class="glyphicon glyphicon-cog"></span>
        <span class="glyphicon glyphicon-trash"></span>
        <span class="glyphicon glyphicon-home"></span>
        <span class="glyphicon glyphicon-file"></span>
        <span class="glyphicon glyphicon-time"></span>
        <span class="glyphicon glyphicon-road"></span>
        <span class="glyphicon glyphicon-download-alt"></span>
        <span class="glyphicon glyphicon-download"></span>
        <span class="glyphicon glyphicon-upload"></span>
        <span class="glyphicon glyphicon-inbox"></span>
        <span class="glyphicon glyphicon-play-circle"></span>
        <span class="glyphicon glyphicon-repeat"></span>
        <span class="glyphicon glyphicon-refresh"></span>
        <span class="glyphicon glyphicon-list-alt"></span>
        <span class="glyphicon glyphicon-lock"></span>
        <span class="glyphicon glyphicon-flag"></span>
        <span class="glyphicon glyphicon-headphones"></span>
        <span class="glyphicon glyphicon-volume-off"></span>
        <span class="glyphicon glyphicon-volume-down"></span>
        <span class="glyphicon glyphicon-volume-up"></span>
        <span class="glyphicon glyphicon-qrcode"></span>
        <span class="glyphicon glyphicon-barcode"></span>
        <span class="glyphicon glyphicon-tag"></span>
        <span class="glyphicon glyphicon-tags"></span>
        <span class="glyphicon glyphicon-book"></span>
        <span class="glyphicon glyphicon-bookmark"></span>
        <span class="glyphicon glyphicon-print"></span>
        <span class="glyphicon glyphicon-camera"></span>
        <span class="glyphicon glyphicon-font"></span>
        <span class="glyphicon glyphicon-bold"></span>
        <span class="glyphicon glyphicon-italic"></span>
        <span class="glyphicon glyphicon-text-height"></span>
        <span class="glyphicon glyphicon-text-width"></span>
        <span class="glyphicon glyphicon-align-left"></span>
        <span class="glyphicon glyphicon-align-center"></span>
        <span class="glyphicon glyphicon-align-right"></span>
        <span class="glyphicon glyphicon-align-justify"></span>
        <span class="glyphicon glyphicon-list"></span>
        <span class="glyphicon glyphicon-indent-left"></span>
        <span class="glyphicon glyphicon-indent-right"></span>
        <span class="glyphicon glyphicon-facetime-video"></span>
        <span class="glyphicon glyphicon-picture"></span>
        <span class="glyphicon glyphicon-map-marker"></span>
        <span class="glyphicon glyphicon-adjust"></span>
        <span class="glyphicon glyphicon-tint"></span>
        <span class="glyphicon glyphicon-edit"></span>
        <span class="glyphicon glyphicon-share"></span>
        <span class="glyphicon glyphicon-check"></span>
        <span class="glyphicon glyphicon-move"></span>
        <span class="glyphicon glyphicon-step-backward"></span>
        <span class="glyphicon glyphicon-fast-backward"></span>
        <span class="glyphicon glyphicon-backward"></span>
        <span class="glyphicon glyphicon-play"></span>
        <span class="glyphicon glyphicon-pause"></span>
        <span class="glyphicon glyphicon-stop"></span>
        <span class="glyphicon glyphicon-forward"></span>
        <span class="glyphicon glyphicon-fast-forward"></span>
        <span class="glyphicon glyphicon-step-forward"></span>
        <span class="glyphicon glyphicon-eject"></span>
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="glyphicon glyphicon-plus-sign"></span>
        <span class="glyphicon glyphicon-minus-sign"></span>
        <span class="glyphicon glyphicon-remove-sign"></span>
        <span class="glyphicon glyphicon-ok-sign"></span>
        <span class="glyphicon glyphicon-question-sign"></span>
        <span class="glyphicon glyphicon-info-sign"></span>
        <span class="glyphicon glyphicon-screenshot"></span>
        <span class="glyphicon glyphicon-remove-circle"></span>
        <span class="glyphicon glyphicon-ok-circle"></span>
        <span class="glyphicon glyphicon-ban-circle"></span>
        <span class="glyphicon glyphicon-arrow-left"></span>
        <span class="glyphicon glyphicon-arrow-right"></span>
        <span class="glyphicon glyphicon-arrow-up"></span>
        <span class="glyphicon glyphicon-arrow-down"></span>
        <span class="glyphicon glyphicon-share-alt"></span>
        <span class="glyphicon glyphicon-resize-full"></span>
        <span class="glyphicon glyphicon-resize-small"></span>
        <span class="glyphicon glyphicon-exclamation-sign"></span>
        <span class="glyphicon glyphicon-gift"></span>
        <span class="glyphicon glyphicon-leaf"></span>
        <span class="glyphicon glyphicon-fire"></span>
        <span class="glyphicon glyphicon-eye-open"></span>
        <span class="glyphicon glyphicon-eye-close"></span>
        <span class="glyphicon glyphicon-warning-sign"></span>
        <span class="glyphicon glyphicon-plane"></span>
        <span class="glyphicon glyphicon-calendar"></span>
        <span class="glyphicon glyphicon-random"></span>
        <span class="glyphicon glyphicon-comment"></span>
        <span class="glyphicon glyphicon-magnet"></span>
        <span class="glyphicon glyphicon-chevron-up"></span>
        <span class="glyphicon glyphicon-chevron-down"></span>
        <span class="glyphicon glyphicon-retweet"></span>
        <span class="glyphicon glyphicon-shopping-cart"></span>
        <span class="glyphicon glyphicon-folder-close"></span>
        <span class="glyphicon glyphicon-folder-open"></span>
        <span class="glyphicon glyphicon-resize-vertical"></span>
        <span class="glyphicon glyphicon-resize-horizontal"></span>
        <span class="glyphicon glyphicon-hdd"></span>
        <span class="glyphicon glyphicon-bullhorn"></span>
        <span class="glyphicon glyphicon-bell"></span>
        <span class="glyphicon glyphicon-certificate"></span>
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <span class="glyphicon glyphicon-thumbs-down"></span>
        <span class="glyphicon glyphicon-hand-right"></span>
        <span class="glyphicon glyphicon-hand-left"></span>
        <span class="glyphicon glyphicon-hand-up"></span>
        <span class="glyphicon glyphicon-hand-down"></span>
        <span class="glyphicon glyphicon-circle-arrow-right"></span>
        <span class="glyphicon glyphicon-circle-arrow-left"></span>
        <span class="glyphicon glyphicon-circle-arrow-up"></span>
        <span class="glyphicon glyphicon-circle-arrow-down"></span>
        <span class="glyphicon glyphicon-globe"></span>
        <span class="glyphicon glyphicon-wrench"></span>
        <span class="glyphicon glyphicon-tasks"></span>
        <span class="glyphicon glyphicon-filter"></span>
        <span class="glyphicon glyphicon-briefcase"></span>
        <span class="glyphicon glyphicon-fullscreen"></span>
        <span class="glyphicon glyphicon-dashboard"></span>
        <span class="glyphicon glyphicon-paperclip"></span>
        <span class="glyphicon glyphicon-heart-empty"></span>
        <span class="glyphicon glyphicon-link"></span>
        <span class="glyphicon glyphicon-phone"></span>
        <span class="glyphicon glyphicon-pushpin"></span>
        <span class="glyphicon glyphicon-usd"></span>
        <span class="glyphicon glyphicon-gbp"></span>
        <span class="glyphicon glyphicon-sort"></span>
        <span class="glyphicon glyphicon-sort-by-alphabet"></span>
        <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
        <span class="glyphicon glyphicon-sort-by-order"></span>
        <span class="glyphicon glyphicon-sort-by-order-alt"></span>
        <span class="glyphicon glyphicon-sort-by-attributes"></span>
        <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
        <span class="glyphicon glyphicon-unchecked"></span>
        <span class="glyphicon glyphicon-expand"></span>
        <span class="glyphicon glyphicon-collapse-down"></span>
        <span class="glyphicon glyphicon-collapse-up"></span>
        <span class="glyphicon glyphicon-log-in"></span>
        <span class="glyphicon glyphicon-flash"></span>
        <span class="glyphicon glyphicon-log-out"></span>
        <span class="glyphicon glyphicon-new-window"></span>
        <span class="glyphicon glyphicon-record"></span>
        <span class="glyphicon glyphicon-save"></span>
        <span class="glyphicon glyphicon-open"></span>
        <span class="glyphicon glyphicon-saved"></span>
        <span class="glyphicon glyphicon-import"></span>
        <span class="glyphicon glyphicon-export"></span>
        <span class="glyphicon glyphicon-send"></span>
        <span class="glyphicon glyphicon-floppy-disk"></span>
        <span class="glyphicon glyphicon-floppy-saved"></span>
        <span class="glyphicon glyphicon-floppy-remove"></span>
        <span class="glyphicon glyphicon-floppy-save"></span>
        <span class="glyphicon glyphicon-floppy-open"></span>
        <span class="glyphicon glyphicon-credit-card"></span>
        <span class="glyphicon glyphicon-transfer"></span>
        <span class="glyphicon glyphicon-cutlery"></span>
        <span class="glyphicon glyphicon-header"></span>
        <span class="glyphicon glyphicon-compressed"></span>
        <span class="glyphicon glyphicon-earphone"></span>
        <span class="glyphicon glyphicon-phone-alt"></span>
        <span class="glyphicon glyphicon-tower"></span>
        <span class="glyphicon glyphicon-stats"></span>
        <span class="glyphicon glyphicon-sd-video"></span>
        <span class="glyphicon glyphicon-hd-video"></span>
        <span class="glyphicon glyphicon-subtitles"></span>
        <span class="glyphicon glyphicon-sound-stereo"></span>
        <span class="glyphicon glyphicon-sound-dolby"></span>
        <span class="glyphicon glyphicon-sound-5-1"></span>
        <span class="glyphicon glyphicon-sound-6-1"></span>
        <span class="glyphicon glyphicon-sound-7-1"></span>
        <span class="glyphicon glyphicon-copyright-mark"></span>
        <span class="glyphicon glyphicon-registration-mark"></span>
        <span class="glyphicon glyphicon-cloud-download"></span>
        <span class="glyphicon glyphicon-cloud-upload"></span>
        <span class="glyphicon glyphicon-tree-conifer"></span>
        <span class="glyphicon glyphicon-tree-deciduous"></span>
        <span class="glyphicon glyphicon-cd"></span>
        <span class="glyphicon glyphicon-save-file"></span>
        <span class="glyphicon glyphicon-open-file"></span>
        <span class="glyphicon glyphicon-level-up"></span>
        <span class="glyphicon glyphicon-copy"></span>
        <span class="glyphicon glyphicon-paste"></span>
        <span class="glyphicon glyphicon-alert"></span>
        <span class="glyphicon glyphicon-equalizer"></span>
        <span class="glyphicon glyphicon-king"></span>
        <span class="glyphicon glyphicon-queen"></span>
        <span class="glyphicon glyphicon-pawn"></span>
        <span class="glyphicon glyphicon-bishop"></span>
        <span class="glyphicon glyphicon-knight"></span>
        <span class="glyphicon glyphicon-baby-formula"></span>
        <span class="glyphicon glyphicon-tent"></span>
        <span class="glyphicon glyphicon-blackboard"></span>
        <span class="glyphicon glyphicon-bed"></span>
        <span class="glyphicon glyphicon-apple"></span>
        <span class="glyphicon glyphicon-erase"></span>
        <span class="glyphicon glyphicon-hourglass"></span>
        <span class="glyphicon glyphicon-lamp"></span>
        <span class="glyphicon glyphicon-duplicate"></span>
        <span class="glyphicon glyphicon-piggy-bank"></span>
        <span class="glyphicon glyphicon-scissors"></span>
        <span class="glyphicon glyphicon-bitcoin"></span>
        <span class="glyphicon glyphicon-btc"></span>
        <span class="glyphicon glyphicon-xbt"></span>
        <span class="glyphicon glyphicon-yen"></span>
        <span class="glyphicon glyphicon-jpy"></span>
        <span class="glyphicon glyphicon-ruble"></span>
        <span class="glyphicon glyphicon-rub"></span>
        <span class="glyphicon glyphicon-scale"></span>
        <span class="glyphicon glyphicon-ice-lolly"></span>
        <span class="glyphicon glyphicon-ice-lolly-tasted"></span>
        <span class="glyphicon glyphicon-education"></span>
        <span class="glyphicon glyphicon-option-horizontal"></span>
        <span class="glyphicon glyphicon-option-vertical"></span>
        <span class="glyphicon glyphicon-menu-hamburger"></span>
        <span class="glyphicon glyphicon-modal-window"></span>
        <span class="glyphicon glyphicon-oil"></span>
        <span class="glyphicon glyphicon-grain"></span>
        <span class="glyphicon glyphicon-sunglasses"></span>
        <span class="glyphicon glyphicon-text-size"></span>
        <span class="glyphicon glyphicon-text-color"></span>
        <span class="glyphicon glyphicon-text-background"></span>
        <span class="glyphicon glyphicon-object-align-top"></span>
        <span class="glyphicon glyphicon-object-align-bottom"></span>
        <span class="glyphicon glyphicon-object-align-horizontal"></span>
        <span class="glyphicon glyphicon-object-align-left"></span>
        <span class="glyphicon glyphicon-object-align-vertical"></span>
        <span class="glyphicon glyphicon-object-align-right"></span>
        <span class="glyphicon glyphicon-triangle-right"></span>
        <span class="glyphicon glyphicon-triangle-left"></span>
        <span class="glyphicon glyphicon-triangle-bottom"></span>
        <span class="glyphicon glyphicon-triangle-top"></span>
        <span class="glyphicon glyphicon-console"></span>
        <span class="glyphicon glyphicon-superscript"></span>
        <span class="glyphicon glyphicon-subscript"></span>
        <span class="glyphicon glyphicon-menu-left"></span>
        <span class="glyphicon glyphicon-menu-right"></span>
        <span class="glyphicon glyphicon-menu-down"></span>
        <span class="glyphicon glyphicon-menu-up"></span>
    </section>


    <div class="page-header" id="fontawesome">
        <h1>Fontawesome <small><a href="http://fortawesome.github.io/Font-Awesome/icons" target="_blank">http://fortawesome.github.io/Font-Awesome/icons</a></small></h1>
        <button type="button" class="btn btn-xs btn-default" data-gist="7a06bdb964e35046f497">Show code sample</button>
    </div>
    <div class="gist hidden" id="7a06bdb964e35046f497">
        <script src="https://gist.github.com/atroxmavenia/7a06bdb964e35046f497.js"></script>
    </div>
    <section style="font-size: 2em;">
        <span class="fa fa-adjust"></span>
        <span class="fa fa-adn"></span>
        <span class="fa fa-align-center"></span>
        <span class="fa fa-align-justify"></span>
        <span class="fa fa-align-left"></span>
        <span class="fa fa-align-right"></span>
        <span class="fa fa-ambulance"></span>
        <span class="fa fa-anchor"></span>
        <span class="fa fa-android"></span>
        <span class="fa fa-angellist"></span>
        <span class="fa fa-angle-double-down"></span>
        <span class="fa fa-angle-double-left"></span>
        <span class="fa fa-angle-double-right"></span>
        <span class="fa fa-angle-double-up"></span>
        <span class="fa fa-angle-down"></span>
        <span class="fa fa-angle-left"></span>
        <span class="fa fa-angle-right"></span>
        <span class="fa fa-angle-up"></span>
        <span class="fa fa-apple"></span>
        <span class="fa fa-archive"></span>
        <span class="fa fa-area-chart"></span>
        <span class="fa fa-arrow-circle-down"></span>
        <span class="fa fa-arrow-circle-left"></span>
        <span class="fa fa-arrow-circle-o-down"></span>
        <span class="fa fa-arrow-circle-o-left"></span>
        <span class="fa fa-arrow-circle-o-right"></span>
        <span class="fa fa-arrow-circle-o-up"></span>
        <span class="fa fa-arrow-circle-right"></span>
        <span class="fa fa-arrow-circle-up"></span>
        <span class="fa fa-arrow-down"></span>
        <span class="fa fa-arrow-left"></span>
        <span class="fa fa-arrow-right"></span>
        <span class="fa fa-arrow-up"></span>
        <span class="fa fa-arrows"></span>
        <span class="fa fa-arrows-alt"></span>
        <span class="fa fa-arrows-h"></span>
        <span class="fa fa-arrows-v"></span>
        <span class="fa fa-asterisk"></span>
        <span class="fa fa-at"></span>
        <span class="fa fa-automobile (alias)"></span>
        <span class="fa fa-backward"></span>
        <span class="fa fa-ban"></span>
        <span class="fa fa-bank (alias)"></span>
        <span class="fa fa-bar-chart"></span>
        <span class="fa fa-bar-chart-o (alias)"></span>
        <span class="fa fa-barcode"></span>
        <span class="fa fa-bars"></span>
        <span class="fa fa-bed"></span>
        <span class="fa fa-beer"></span>
        <span class="fa fa-behance"></span>
        <span class="fa fa-behance-square"></span>
        <span class="fa fa-bell"></span>
        <span class="fa fa-bell-o"></span>
        <span class="fa fa-bell-slash"></span>
        <span class="fa fa-bell-slash-o"></span>
        <span class="fa fa-bicycle"></span>
        <span class="fa fa-binoculars"></span>
        <span class="fa fa-birthday-cake"></span>
        <span class="fa fa-bitbucket"></span>
        <span class="fa fa-bitbucket-square"></span>
        <span class="fa fa-bitcoin (alias)"></span>
        <span class="fa fa-bold"></span>
        <span class="fa fa-bolt"></span>
        <span class="fa fa-bomb"></span>
        <span class="fa fa-book"></span>
        <span class="fa fa-bookmark"></span>
        <span class="fa fa-bookmark-o"></span>
        <span class="fa fa-briefcase"></span>
        <span class="fa fa-btc"></span>
        <span class="fa fa-bug"></span>
        <span class="fa fa-building"></span>
        <span class="fa fa-building-o"></span>
        <span class="fa fa-bullhorn"></span>
        <span class="fa fa-bullseye"></span>
        <span class="fa fa-bus"></span>
        <span class="fa fa-buysellads"></span>
        <span class="fa fa-cab (alias)"></span>
        <span class="fa fa-calculator"></span>
        <span class="fa fa-calendar"></span>
        <span class="fa fa-calendar-o"></span>
        <span class="fa fa-camera"></span>
        <span class="fa fa-camera-retro"></span>
        <span class="fa fa-car"></span>
        <span class="fa fa-caret-down"></span>
        <span class="fa fa-caret-left"></span>
        <span class="fa fa-caret-right"></span>
        <span class="fa fa-caret-square-o-down"></span>
        <span class="fa fa-caret-square-o-left"></span>
        <span class="fa fa-caret-square-o-right"></span>
        <span class="fa fa-caret-square-o-up"></span>
        <span class="fa fa-caret-up"></span>
        <span class="fa fa-cart-arrow-down"></span>
        <span class="fa fa-cart-plus"></span>
        <span class="fa fa-cc"></span>
        <span class="fa fa-cc-amex"></span>
        <span class="fa fa-cc-discover"></span>
        <span class="fa fa-cc-mastercard"></span>
        <span class="fa fa-cc-paypal"></span>
        <span class="fa fa-cc-stripe"></span>
        <span class="fa fa-cc-visa"></span>
        <span class="fa fa-certificate"></span>
        <span class="fa fa-chain (alias)"></span>
        <span class="fa fa-chain-broken"></span>
        <span class="fa fa-check"></span>
        <span class="fa fa-check-circle"></span>
        <span class="fa fa-check-circle-o"></span>
        <span class="fa fa-check-square"></span>
        <span class="fa fa-check-square-o"></span>
        <span class="fa fa-chevron-circle-down"></span>
        <span class="fa fa-chevron-circle-left"></span>
        <span class="fa fa-chevron-circle-right"></span>
        <span class="fa fa-chevron-circle-up"></span>
        <span class="fa fa-chevron-down"></span>
        <span class="fa fa-chevron-left"></span>
        <span class="fa fa-chevron-right"></span>
        <span class="fa fa-chevron-up"></span>
        <span class="fa fa-child"></span>
        <span class="fa fa-circle"></span>
        <span class="fa fa-circle-o"></span>
        <span class="fa fa-circle-o-notch"></span>
        <span class="fa fa-circle-thin"></span>
        <span class="fa fa-clipboard"></span>
        <span class="fa fa-clock-o"></span>
        <span class="fa fa-close (alias)"></span>
        <span class="fa fa-cloud"></span>
        <span class="fa fa-cloud-download"></span>
        <span class="fa fa-cloud-upload"></span>
        <span class="fa fa-cny (alias)"></span>
        <span class="fa fa-code"></span>
        <span class="fa fa-code-fork"></span>
        <span class="fa fa-codepen"></span>
        <span class="fa fa-coffee"></span>
        <span class="fa fa-cog"></span>
        <span class="fa fa-cogs"></span>
        <span class="fa fa-columns"></span>
        <span class="fa fa-comment"></span>
        <span class="fa fa-comment-o"></span>
        <span class="fa fa-comments"></span>
        <span class="fa fa-comments-o"></span>
        <span class="fa fa-compass"></span>
        <span class="fa fa-compress"></span>
        <span class="fa fa-connectdevelop"></span>
        <span class="fa fa-copy (alias)"></span>
        <span class="fa fa-copyright"></span>
        <span class="fa fa-credit-card"></span>
        <span class="fa fa-crop"></span>
        <span class="fa fa-crosshairs"></span>
        <span class="fa fa-css3"></span>
        <span class="fa fa-cube"></span>
        <span class="fa fa-cubes"></span>
        <span class="fa fa-cut (alias)"></span>
        <span class="fa fa-cutlery"></span>
        <span class="fa fa-dashboard (alias)"></span>
        <span class="fa fa-dashcube"></span>
        <span class="fa fa-database"></span>
        <span class="fa fa-dedent (alias)"></span>
        <span class="fa fa-delicious"></span>
        <span class="fa fa-desktop"></span>
        <span class="fa fa-deviantart"></span>
        <span class="fa fa-diamond"></span>
        <span class="fa fa-digg"></span>
        <span class="fa fa-dollar (alias)"></span>
        <span class="fa fa-dot-circle-o"></span>
        <span class="fa fa-download"></span>
        <span class="fa fa-dribbble"></span>
        <span class="fa fa-dropbox"></span>
        <span class="fa fa-drupal"></span>
        <span class="fa fa-edit (alias)"></span>
        <span class="fa fa-eject"></span>
        <span class="fa fa-ellipsis-h"></span>
        <span class="fa fa-ellipsis-v"></span>
        <span class="fa fa-empire"></span>
        <span class="fa fa-envelope"></span>
        <span class="fa fa-envelope-o"></span>
        <span class="fa fa-envelope-square"></span>
        <span class="fa fa-eraser"></span>
        <span class="fa fa-eur"></span>
        <span class="fa fa-euro (alias)"></span>
        <span class="fa fa-exchange"></span>
        <span class="fa fa-exclamation"></span>
        <span class="fa fa-exclamation-circle"></span>
        <span class="fa fa-exclamation-triangle"></span>
        <span class="fa fa-expand"></span>
        <span class="fa fa-external-link"></span>
        <span class="fa fa-external-link-square"></span>
        <span class="fa fa-eye"></span>
        <span class="fa fa-eye-slash"></span>
        <span class="fa fa-eyedropper"></span>
        <span class="fa fa-facebook"></span>
        <span class="fa fa-facebook-f (alias)"></span>
        <span class="fa fa-facebook-official"></span>
        <span class="fa fa-facebook-square"></span>
        <span class="fa fa-fast-backward"></span>
        <span class="fa fa-fast-forward"></span>
        <span class="fa fa-fax"></span>
        <span class="fa fa-female"></span>
        <span class="fa fa-fighter-jet"></span>
        <span class="fa fa-file"></span>
        <span class="fa fa-file-archive-o"></span>
        <span class="fa fa-file-audio-o"></span>
        <span class="fa fa-file-code-o"></span>
        <span class="fa fa-file-excel-o"></span>
        <span class="fa fa-file-image-o"></span>
        <span class="fa fa-file-movie-o (alias)"></span>
        <span class="fa fa-file-o"></span>
        <span class="fa fa-file-pdf-o"></span>
        <span class="fa fa-file-photo-o (alias)"></span>
        <span class="fa fa-file-picture-o (alias)"></span>
        <span class="fa fa-file-powerpoint-o"></span>
        <span class="fa fa-file-sound-o (alias)"></span>
        <span class="fa fa-file-text"></span>
        <span class="fa fa-file-text-o"></span>
        <span class="fa fa-file-video-o"></span>
        <span class="fa fa-file-word-o"></span>
        <span class="fa fa-file-zip-o (alias)"></span>
        <span class="fa fa-files-o"></span>
        <span class="fa fa-film"></span>
        <span class="fa fa-filter"></span>
        <span class="fa fa-fire"></span>
        <span class="fa fa-fire-extinguisher"></span>
        <span class="fa fa-flag"></span>
        <span class="fa fa-flag-checkered"></span>
        <span class="fa fa-flag-o"></span>
        <span class="fa fa-flash (alias)"></span>
        <span class="fa fa-flask"></span>
        <span class="fa fa-flickr"></span>
        <span class="fa fa-floppy-o"></span>
        <span class="fa fa-folder"></span>
        <span class="fa fa-folder-o"></span>
        <span class="fa fa-folder-open"></span>
        <span class="fa fa-folder-open-o"></span>
        <span class="fa fa-font"></span>
        <span class="fa fa-forumbee"></span>
        <span class="fa fa-forward"></span>
        <span class="fa fa-foursquare"></span>
        <span class="fa fa-frown-o"></span>
        <span class="fa fa-futbol-o"></span>
        <span class="fa fa-gamepad"></span>
        <span class="fa fa-gavel"></span>
        <span class="fa fa-gbp"></span>
        <span class="fa fa-ge (alias)"></span>
        <span class="fa fa-gear (alias)"></span>
        <span class="fa fa-gears (alias)"></span>
        <span class="fa fa-genderless (alias)"></span>
        <span class="fa fa-gift"></span>
        <span class="fa fa-git"></span>
        <span class="fa fa-git-square"></span>
        <span class="fa fa-github"></span>
        <span class="fa fa-github-alt"></span>
        <span class="fa fa-github-square"></span>
        <span class="fa fa-gittip (alias)"></span>
        <span class="fa fa-glass"></span>
        <span class="fa fa-globe"></span>
        <span class="fa fa-google"></span>
        <span class="fa fa-google-plus"></span>
        <span class="fa fa-google-plus-square"></span>
        <span class="fa fa-google-wallet"></span>
        <span class="fa fa-graduation-cap"></span>
        <span class="fa fa-gratipay"></span>
        <span class="fa fa-group (alias)"></span>
        <span class="fa fa-h-square"></span>
        <span class="fa fa-hacker-news"></span>
        <span class="fa fa-hand-o-down"></span>
        <span class="fa fa-hand-o-left"></span>
        <span class="fa fa-hand-o-right"></span>
        <span class="fa fa-hand-o-up"></span>
        <span class="fa fa-hdd-o"></span>
        <span class="fa fa-header"></span>
        <span class="fa fa-headphones"></span>
        <span class="fa fa-heart"></span>
        <span class="fa fa-heart-o"></span>
        <span class="fa fa-heartbeat"></span>
        <span class="fa fa-history"></span>
        <span class="fa fa-home"></span>
        <span class="fa fa-hospital-o"></span>
        <span class="fa fa-hotel (alias)"></span>
        <span class="fa fa-html5"></span>
        <span class="fa fa-ils"></span>
        <span class="fa fa-image (alias)"></span>
        <span class="fa fa-inbox"></span>
        <span class="fa fa-indent"></span>
        <span class="fa fa-info"></span>
        <span class="fa fa-info-circle"></span>
        <span class="fa fa-inr"></span>
        <span class="fa fa-instagram"></span>
        <span class="fa fa-institution (alias)"></span>
        <span class="fa fa-ioxhost"></span>
        <span class="fa fa-italic"></span>
        <span class="fa fa-joomla"></span>
        <span class="fa fa-jpy"></span>
        <span class="fa fa-jsfiddle"></span>
        <span class="fa fa-key"></span>
        <span class="fa fa-keyboard-o"></span>
        <span class="fa fa-krw"></span>
        <span class="fa fa-language"></span>
        <span class="fa fa-laptop"></span>
        <span class="fa fa-lastfm"></span>
        <span class="fa fa-lastfm-square"></span>
        <span class="fa fa-leaf"></span>
        <span class="fa fa-leanpub"></span>
        <span class="fa fa-legal (alias)"></span>
        <span class="fa fa-lemon-o"></span>
        <span class="fa fa-level-down"></span>
        <span class="fa fa-level-up"></span>
        <span class="fa fa-life-bouy (alias)"></span>
        <span class="fa fa-life-buoy (alias)"></span>
        <span class="fa fa-life-ring"></span>
        <span class="fa fa-life-saver (alias)"></span>
        <span class="fa fa-lightbulb-o"></span>
        <span class="fa fa-line-chart"></span>
        <span class="fa fa-link"></span>
        <span class="fa fa-linkedin"></span>
        <span class="fa fa-linkedin-square"></span>
        <span class="fa fa-linux"></span>
        <span class="fa fa-list"></span>
        <span class="fa fa-list-alt"></span>
        <span class="fa fa-list-ol"></span>
        <span class="fa fa-list-ul"></span>
        <span class="fa fa-location-arrow"></span>
        <span class="fa fa-lock"></span>
        <span class="fa fa-long-arrow-down"></span>
        <span class="fa fa-long-arrow-left"></span>
        <span class="fa fa-long-arrow-right"></span>
        <span class="fa fa-long-arrow-up"></span>
        <span class="fa fa-magic"></span>
        <span class="fa fa-magnet"></span>
        <span class="fa fa-mail-forward (alias)"></span>
        <span class="fa fa-mail-reply (alias)"></span>
        <span class="fa fa-mail-reply-all (alias)"></span>
        <span class="fa fa-male"></span>
        <span class="fa fa-map-marker"></span>
        <span class="fa fa-mars"></span>
        <span class="fa fa-mars-double"></span>
        <span class="fa fa-mars-stroke"></span>
        <span class="fa fa-mars-stroke-h"></span>
        <span class="fa fa-mars-stroke-v"></span>
        <span class="fa fa-maxcdn"></span>
        <span class="fa fa-meanpath"></span>
        <span class="fa fa-medium"></span>
        <span class="fa fa-medkit"></span>
        <span class="fa fa-meh-o"></span>
        <span class="fa fa-mercury"></span>
        <span class="fa fa-microphone"></span>
        <span class="fa fa-microphone-slash"></span>
        <span class="fa fa-minus"></span>
        <span class="fa fa-minus-circle"></span>
        <span class="fa fa-minus-square"></span>
        <span class="fa fa-minus-square-o"></span>
        <span class="fa fa-mobile"></span>
        <span class="fa fa-mobile-phone (alias)"></span>
        <span class="fa fa-money"></span>
        <span class="fa fa-moon-o"></span>
        <span class="fa fa-mortar-board (alias)"></span>
        <span class="fa fa-motorcycle"></span>
        <span class="fa fa-music"></span>
        <span class="fa fa-navicon (alias)"></span>
        <span class="fa fa-neuter"></span>
        <span class="fa fa-newspaper-o"></span>
        <span class="fa fa-openid"></span>
        <span class="fa fa-outdent"></span>
        <span class="fa fa-pagelines"></span>
        <span class="fa fa-paint-brush"></span>
        <span class="fa fa-paper-plane"></span>
        <span class="fa fa-paper-plane-o"></span>
        <span class="fa fa-paperclip"></span>
        <span class="fa fa-paragraph"></span>
        <span class="fa fa-paste (alias)"></span>
        <span class="fa fa-pause"></span>
        <span class="fa fa-paw"></span>
        <span class="fa fa-paypal"></span>
        <span class="fa fa-pencil"></span>
        <span class="fa fa-pencil-square"></span>
        <span class="fa fa-pencil-square-o"></span>
        <span class="fa fa-phone"></span>
        <span class="fa fa-phone-square"></span>
        <span class="fa fa-photo (alias)"></span>
        <span class="fa fa-picture-o"></span>
        <span class="fa fa-pie-chart"></span>
        <span class="fa fa-pied-piper"></span>
        <span class="fa fa-pied-piper-alt"></span>
        <span class="fa fa-pinterest"></span>
        <span class="fa fa-pinterest-p"></span>
        <span class="fa fa-pinterest-square"></span>
        <span class="fa fa-plane"></span>
        <span class="fa fa-play"></span>
        <span class="fa fa-play-circle"></span>
        <span class="fa fa-play-circle-o"></span>
        <span class="fa fa-plug"></span>
        <span class="fa fa-plus"></span>
        <span class="fa fa-plus-circle"></span>
        <span class="fa fa-plus-square"></span>
        <span class="fa fa-plus-square-o"></span>
        <span class="fa fa-power-off"></span>
        <span class="fa fa-print"></span>
        <span class="fa fa-puzzle-piece"></span>
        <span class="fa fa-qq"></span>
        <span class="fa fa-qrcode"></span>
        <span class="fa fa-question"></span>
        <span class="fa fa-question-circle"></span>
        <span class="fa fa-quote-left"></span>
        <span class="fa fa-quote-right"></span>
        <span class="fa fa-ra (alias)"></span>
        <span class="fa fa-random"></span>
        <span class="fa fa-rebel"></span>
        <span class="fa fa-recycle"></span>
        <span class="fa fa-reddit"></span>
        <span class="fa fa-reddit-square"></span>
        <span class="fa fa-refresh"></span>
        <span class="fa fa-remove (alias)"></span>
        <span class="fa fa-renren"></span>
        <span class="fa fa-reorder (alias)"></span>
        <span class="fa fa-repeat"></span>
        <span class="fa fa-reply"></span>
        <span class="fa fa-reply-all"></span>
        <span class="fa fa-retweet"></span>
        <span class="fa fa-rmb (alias)"></span>
        <span class="fa fa-road"></span>
        <span class="fa fa-rocket"></span>
        <span class="fa fa-rotate-left (alias)"></span>
        <span class="fa fa-rotate-right (alias)"></span>
        <span class="fa fa-rouble (alias)"></span>
        <span class="fa fa-rss"></span>
        <span class="fa fa-rss-square"></span>
        <span class="fa fa-rub"></span>
        <span class="fa fa-ruble (alias)"></span>
        <span class="fa fa-rupee (alias)"></span>
        <span class="fa fa-save (alias)"></span>
        <span class="fa fa-scissors"></span>
        <span class="fa fa-search"></span>
        <span class="fa fa-search-minus"></span>
        <span class="fa fa-search-plus"></span>
        <span class="fa fa-sellsy"></span>
        <span class="fa fa-send (alias)"></span>
        <span class="fa fa-send-o (alias)"></span>
        <span class="fa fa-server"></span>
        <span class="fa fa-share"></span>
        <span class="fa fa-share-alt"></span>
        <span class="fa fa-share-alt-square"></span>
        <span class="fa fa-share-square"></span>
        <span class="fa fa-share-square-o"></span>
        <span class="fa fa-shekel (alias)"></span>
        <span class="fa fa-sheqel (alias)"></span>
        <span class="fa fa-shield"></span>
        <span class="fa fa-ship"></span>
        <span class="fa fa-shirtsinbulk"></span>
        <span class="fa fa-shopping-cart"></span>
        <span class="fa fa-sign-in"></span>
        <span class="fa fa-sign-out"></span>
        <span class="fa fa-signal"></span>
        <span class="fa fa-simplybuilt"></span>
        <span class="fa fa-sitemap"></span>
        <span class="fa fa-skyatlas"></span>
        <span class="fa fa-skype"></span>
        <span class="fa fa-slack"></span>
        <span class="fa fa-sliders"></span>
        <span class="fa fa-slideshare"></span>
        <span class="fa fa-smile-o"></span>
        <span class="fa fa-soccer-ball-o (alias)"></span>
        <span class="fa fa-sort"></span>
        <span class="fa fa-sort-alpha-asc"></span>
        <span class="fa fa-sort-alpha-desc"></span>
        <span class="fa fa-sort-amount-asc"></span>
        <span class="fa fa-sort-amount-desc"></span>
        <span class="fa fa-sort-asc"></span>
        <span class="fa fa-sort-desc"></span>
        <span class="fa fa-sort-down (alias)"></span>
        <span class="fa fa-sort-numeric-asc"></span>
        <span class="fa fa-sort-numeric-desc"></span>
        <span class="fa fa-sort-up (alias)"></span>
        <span class="fa fa-soundcloud"></span>
        <span class="fa fa-space-shuttle"></span>
        <span class="fa fa-spinner"></span>
        <span class="fa fa-spoon"></span>
        <span class="fa fa-spotify"></span>
        <span class="fa fa-square"></span>
        <span class="fa fa-square-o"></span>
        <span class="fa fa-stack-exchange"></span>
        <span class="fa fa-stack-overflow"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star-half"></span>
        <span class="fa fa-star-half-empty (alias)"></span>
        <span class="fa fa-star-half-full (alias)"></span>
        <span class="fa fa-star-half-o"></span>
        <span class="fa fa-star-o"></span>
        <span class="fa fa-steam"></span>
        <span class="fa fa-steam-square"></span>
        <span class="fa fa-step-backward"></span>
        <span class="fa fa-step-forward"></span>
        <span class="fa fa-stethoscope"></span>
        <span class="fa fa-stop"></span>
        <span class="fa fa-street-view"></span>
        <span class="fa fa-strikethrough"></span>
        <span class="fa fa-stumbleupon"></span>
        <span class="fa fa-stumbleupon-circle"></span>
        <span class="fa fa-subscript"></span>
        <span class="fa fa-subway"></span>
        <span class="fa fa-suitcase"></span>
        <span class="fa fa-sun-o"></span>
        <span class="fa fa-superscript"></span>
        <span class="fa fa-support (alias)"></span>
        <span class="fa fa-table"></span>
        <span class="fa fa-tablet"></span>
        <span class="fa fa-tachometer"></span>
        <span class="fa fa-tag"></span>
        <span class="fa fa-tags"></span>
        <span class="fa fa-tasks"></span>
        <span class="fa fa-taxi"></span>
        <span class="fa fa-tencent-weibo"></span>
        <span class="fa fa-terminal"></span>
        <span class="fa fa-text-height"></span>
        <span class="fa fa-text-width"></span>
        <span class="fa fa-th"></span>
        <span class="fa fa-th-large"></span>
        <span class="fa fa-th-list"></span>
        <span class="fa fa-thumb-tack"></span>
        <span class="fa fa-thumbs-down"></span>
        <span class="fa fa-thumbs-o-down"></span>
        <span class="fa fa-thumbs-o-up"></span>
        <span class="fa fa-thumbs-up"></span>
        <span class="fa fa-ticket"></span>
        <span class="fa fa-times"></span>
        <span class="fa fa-times-circle"></span>
        <span class="fa fa-times-circle-o"></span>
        <span class="fa fa-tint"></span>
        <span class="fa fa-toggle-down (alias)"></span>
        <span class="fa fa-toggle-left (alias)"></span>
        <span class="fa fa-toggle-off"></span>
        <span class="fa fa-toggle-on"></span>
        <span class="fa fa-toggle-right (alias)"></span>
        <span class="fa fa-toggle-up (alias)"></span>
        <span class="fa fa-train"></span>
        <span class="fa fa-transgender"></span>
        <span class="fa fa-transgender-alt"></span>
        <span class="fa fa-trash"></span>
        <span class="fa fa-trash-o"></span>
        <span class="fa fa-tree"></span>
        <span class="fa fa-trello"></span>
        <span class="fa fa-trophy"></span>
        <span class="fa fa-truck"></span>
        <span class="fa fa-try"></span>
        <span class="fa fa-tty"></span>
        <span class="fa fa-tumblr"></span>
        <span class="fa fa-tumblr-square"></span>
        <span class="fa fa-turkish-lira (alias)"></span>
        <span class="fa fa-twitch"></span>
        <span class="fa fa-twitter"></span>
        <span class="fa fa-twitter-square"></span>
        <span class="fa fa-umbrella"></span>
        <span class="fa fa-underline"></span>
        <span class="fa fa-undo"></span>
        <span class="fa fa-university"></span>
        <span class="fa fa-unlink (alias)"></span>
        <span class="fa fa-unlock"></span>
        <span class="fa fa-unlock-alt"></span>
        <span class="fa fa-unsorted (alias)"></span>
        <span class="fa fa-upload"></span>
        <span class="fa fa-usd"></span>
        <span class="fa fa-user"></span>
        <span class="fa fa-user-md"></span>
        <span class="fa fa-user-plus"></span>
        <span class="fa fa-user-secret"></span>
        <span class="fa fa-user-times"></span>
        <span class="fa fa-users"></span>
        <span class="fa fa-venus"></span>
        <span class="fa fa-venus-double"></span>
        <span class="fa fa-venus-mars"></span>
        <span class="fa fa-viacoin"></span>
        <span class="fa fa-video-camera"></span>
        <span class="fa fa-vimeo-square"></span>
        <span class="fa fa-vine"></span>
        <span class="fa fa-vk"></span>
        <span class="fa fa-volume-down"></span>
        <span class="fa fa-volume-off"></span>
        <span class="fa fa-volume-up"></span>
        <span class="fa fa-warning (alias)"></span>
        <span class="fa fa-wechat (alias)"></span>
        <span class="fa fa-weibo"></span>
        <span class="fa fa-weixin"></span>
        <span class="fa fa-whatsapp"></span>
        <span class="fa fa-wheelchair"></span>
        <span class="fa fa-wifi"></span>
        <span class="fa fa-windows"></span>
        <span class="fa fa-won (alias)"></span>
        <span class="fa fa-wordpress"></span>
        <span class="fa fa-wrench"></span>
        <span class="fa fa-xing"></span>
        <span class="fa fa-xing-square"></span>
        <span class="fa fa-yahoo"></span>
        <span class="fa fa-yelp"></span>
        <span class="fa fa-yen (alias)"></span>
        <span class="fa fa-youtube"></span>
        <span class="fa fa-youtube-play"></span>
        <span class="fa fa-youtube-square"></span>
    </section>
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
    // Initialize the processing of local and prefetch
    countries.initialize();
    $('#twtypeahead').typeahead(null, {
        hint: true,
        highlight: true,
        name: 'countries',
        displayKey: 'name',
        // `ttAdapter` wraps the suggestion engine in an adapter that is compatible with the Typeahead plugin
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