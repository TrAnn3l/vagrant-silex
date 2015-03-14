<?php
/* @var $app "Silex/Application"
 */

$view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', 'Home') ?>

<?php
$postr = array_reverse($posts);
foreach ($postr as $post) {
    ?>
    <div class='container'>
        <div class='row'>
            <div class='col-sm-10 col-sm-offset-1'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <?php echo "<h3>" . $post['title'] . "</h3><br>Erstellt am: " . date('d.m.Y', strtotime($post['created_at'])) . " von " . $post['author']; ?>
                        <br>
                    </div>
                    <div class='panel-body'>
                        <span>
                        <?php for ($counter = 0; $counter < 200; $counter++) {
                            if (isset($post['text'][$counter])) {
                                echo $post['text'][$counter];
                            }
                        }
                        if (isset($post['text'][200])) {
                            echo "..."; } ?>
                            </span>
                        <form method='post' action='/readpost'>
                            <br>
                            <p>
                                <button type='submit' name='nextid' class='btn btn-default btn-xs'
                                        value=" <?php echo $post['id'] ?> " role='button'>
                                    Weiterlesen </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>