<?php
/**
 * @var $post
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$view->extend('layout.html.php');
$view['slots']->set('title', 'Eintrag: ' . $id);
?>


<div class="container">

    <div class="col-xs-1"></div>
    <div class="row">
        <div class="col-xs-10">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h3><?php echo $post['title'] ?></h3>
                    <h5>Erstellt von: <?php echo $post['author'] ?></h5>
                </div>
                <div class="panel-body">
                    <?php echo $post['text'] ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-1"></div>
</div>