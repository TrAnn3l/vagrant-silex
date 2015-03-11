<?php
/* @var $app "Silex/Application"
 */

$view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', 'Form') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Gespeichert
                </div>
                <div class="panel-body">
                    Beitrag wurde erfolgreich eingesendet!
                </div>
            </div>
            <a href="/form">
                <button type="button" class="btn btn-success">Noch ein Beitrag erstellen?</button>
            </a>
            <a href="/home">
                <button type="button" class="btn btn-success">Zu den Beiträgen</button>
            </a>
        </div>
    </div>
</div>