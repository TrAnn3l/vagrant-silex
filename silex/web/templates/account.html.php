<?php
/* @var $app "Silex/Application"
 */

$view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', 'Account') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><b><?= $user; ?></b></div>
                <div class="panel-body">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Username:</span>
                        <input type="text" name="user" class="form-control" placeholder="Crazy Guy" aria-describedby="basic-addon1">
                    </div></br>
                    <div class="TODO">
                            <form action="/logout" method="post">
                                <button type="submit" class="btn btn-primary">Logout</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>