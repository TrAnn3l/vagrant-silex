<?php
use Symfony\Component\HttpFoundation\Request;
/* @var $app "Silex/Application"
 */

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});


$app->get('/static/home', function () use ($app) {
    return $app['templating']->render(
        'home.html.php'
    );
});

$app->get('/static/music', function () use ($app) {
    return $app['templating']->render(
        'music.html.php'
    );
});

$app->get('/static/user', function () use ($app) {
    return $app['templating']->render(
        'user.html.php'
    );
});

$app->get('/static/form', function () use ($app) {
    return $app['templating']->render(
        'form.html.php'
    );
});

$app->post('/form', function(Request $request) use($app) {
    if ($request->isMethod('post')) {
        $title = $request->get('title');
        $text = $request->get('text');

        if (($text=='') || ($title=='')) {
            return $app['templating']->render(
                'form_error.html.php'
            );
        }
        else {
            return $app['templating']->render(
                'form_success.html.php'
            );
        }
    }
    return "";
});