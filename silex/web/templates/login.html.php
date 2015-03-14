<?php
/* @var $view
 */

$view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', 'User') ?>

<?php
if($error == 'No Username')  {?>

    <div class="container" >
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="alert alert-danger" role="alert"><b>Warning!</b> You must provide an Username!!!</div>
            </div>
        </div>
    </div>

<?php } ?>

<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Login</b></div>
                <div class="panel-body">
                    <form action="/login" method="post">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Username:</span>
                            <input type="text" name="user" class="form-control" placeholder="Crazy Guy" aria-describedby="basic-addon1">
                        </div></br>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>