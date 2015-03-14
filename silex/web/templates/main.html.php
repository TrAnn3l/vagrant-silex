<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"/>
    <title> Welcome to my Website</title>

    <base href="http://localhost:8001/">

    <style type='text/css'>
        body {
            background-image: url(/img/body-bg.jpg);
            background-repeat: repeat;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand active" href="/">Blog about the Sense of Life</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                </li>
                <li>
                    <a href="/login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account </a>
                </li>
                <li>
                    <a href="/form"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Create a new Post</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron">
                <h1>My Blog about the Sense of Life</h1>
                <p>When this would just be a test-site, then here would stand: Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                But maybe it is a Test-site? Who knows? :D
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="panel panel-default">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info">A Blue field or: Cras justo odio</li>
                    <li class="list-group-item list-group-item-danger">A Red field or: Dapibus ac facilisis in</li>
                    <li class="list-group-item list-group-item-warning">A Yellow field or: Morbi leo risus</li>
                    <li class="list-group-item list-group-item-success">A Green field or: Porta ac consectetur ac</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    And here: Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    And here: Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam
                    rem aperiam.
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>An here an Image of a Potato:</h2><br/>
                    <a href="/img/potato" class="thumbnail">
                        <img src="/img/potato" alt="Your Profile Picture">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>