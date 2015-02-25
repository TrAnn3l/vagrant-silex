<?php
/* @var $app "Silex/Application"
 */

$view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', 'Form') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-1"> </div>
        <div class="panel panel-default">
            <div class="panel-heading"><b>Neuer Beitrag</b></div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="title">Titel</label>
                    <form action="/static/form" method="post">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Titel"><br/>
                        <label for="text">Dein Text</label>
                        <textarea name="text" id="text" class="form-control" rows="5" cols="30" placeholder="Neuer Beitrag"></textarea>
                        <br/>
                        <button type="submit" class="btn btn-primary">Absenden</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>