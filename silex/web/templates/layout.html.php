<?php
/* @var $app \Silex\Application
 * @var $view \Symfony\Component\Templating\PhpEngine
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$title=$view['slots']->get('title', 'Default title');?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title> <?php echo $title ?> </title>

    <base href="http://localhost:8001/">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">WebSiteName</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li <?php active('Home',$title)?>>
                    <a href="/home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                </li>
                <li <?php active('User',$title)?>>
                    <a href="/user"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Page 2</a>
                </li>
                <li <?php active('Form',$title)?>>
                    <a href="/form"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Page 3</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<?php $view['slots']->output('_content') ?>

</body>

<?php
function active($Name,$new) {

    if($new == $Name)
      echo "class=\"active\"";
}?>