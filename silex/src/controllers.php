<?php
use Symfony\Component\HttpFoundation\Request;
/* @var $app "Silex/Application"
 */

$app->get('/', function () {
    return render('index.html');
});

$app->get('/home', function () use ($app) {
    $dbConnection = $app['db'];
    $posts = $dbConnection->fetchAll('SELECT * FROM blog_post');
    return $app['templating']->render(
        'home.html.php', array('posts' => $posts)
    );
});

$app->get('/user', function () use ($app) {
    return $app['templating']->render(
        'user.html.php'
    );
});

$app->get('/form', function () use ($app) {
    return $app['templating']->render(
        'form.html.php'
    );
});

$app->post('/form', function(Request $request) use($app) {
    $title = $request->get('title');
    $text = $request->get('text');

    if (($text=='') || ($title=='')) {
        return $app['templating']->render(
            'form_error.html.php',
            array('title' => $title,'text' => $text)
        );
    }
    else {
        $timestamp = time();
        $dbConnection = $app['db'];
        $dbConnection->insert(
            'blog_post',
            array(
                'title' => $title,
                'text' => $text,
                'created_at' => date("y-m-d",$timestamp)
            )
        );

        return $app['templating']->render(
            'form_success.html.php'
        );
    }

});