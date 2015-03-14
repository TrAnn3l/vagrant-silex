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
                    <div class="row">
                        <div class="col-md-3">
                            <a href="/img/husky" class="thumbnail">
                                <img src="/img/husky" alt="Your Profile Picture">
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h3><b>Username: </b><?= $user; ?></h3>
                            <h4><b>Age: </b>ca. 25?</h4>
                            <h4><b>From: </b>Stuttgart?</h4>
                            <h4><b>Job: </b>Autonetzer</h4>
                            <h5><b>Description: </b> Here could stand it when I would have implemented it ;)</h5>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-1">
                                <br/>
                                <form action="/logout" method="post">
                                <button type="submit" class="btn btn-primary">Logout</button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>