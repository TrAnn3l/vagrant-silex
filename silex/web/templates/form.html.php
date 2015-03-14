<?php
/* @var $app "Silex/Application"
 */

$view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', 'Post') ?>
<?php
    if($user == '')  {?>

<div class="container" >
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="alert alert-danger" role="alert"><b>Warning!</b> You must be <a href="/login">looged in</a> to Access this Site!!!</div>
        </div>
    </div>
</div>

<?php } ?>

<div class="container" >
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Neuer Beitrag</b></div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="title">Titel</label>
                        <form action="/form" method="post">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Titel" <?php logedin($user)?>><br/>
                            <label for="text">Dein Text</label>
                            <textarea name="text" id="text" class="form-control" rows="5" cols="30" placeholder="Neuer Beitrag" <?php logedin($user)?>></textarea><br/>
                            <button type="submit" class="btn btn-primary" <?php logedin($user)?>>Absenden</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
function logedin($user) {
    if($user == '')
        echo "disabled=\"disabled\"";
    else
        echo "";
}?>