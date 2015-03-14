<?php
use Symfony\Component\HttpFoundation\Request;
/* @var $app "Silex/Application"
 */

$app->get('/', function ()  use ($app) {
    return $app->redirect('/home');
});

$app->get('/home', function () use ($app) {
    $dbConnection = $app['db'];
    $posts = $dbConnection->fetchAll('SELECT * FROM blog_post');
    return $app['templating']->render(
        'home.html.php', array('posts' => $posts)
    );
});

$app->get('/account', function () use ($app) {
    $user = $app['session']->get('user')['username'];
    if ($user=='')  {
        return $app['templating']->render(
            'login.html.php'
        );
    } else {
        return $app['templating']->render(
            'account.html.php', array('user' => $user)
        );
    }
});

$app->post('/logout', function() use($app) {
    $user = $app['session']->get('user')['username'];
    if ($user=='')  {
        return $app['templating']->render(
            'form_error.html.php'
        );
    }
    else {
        $app['session']->clear();
        return $app->redirect('/home');
    }
});

$app->get('/login', function () use ($app) {
    $user = $app['session']->get('user')['username'];
    if ($user=='')  {
        return $app['templating']->render(
            'login.html.php'
        );
    } else {
        return $app->redirect('/account');
    }
});

$app->post('/login', function(Request $request) use($app) {
    $user = $request->get('user');
    if ($user=='')  {
        return $app['templating']->render(
            'form_error.html.php'
        );
    }
    else {
        $app['session']->set('user', array('username' => $user));
        return $app->redirect('/account');
    }
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
        $error = 'Bitte Alle Felder ausfüllen!';

        return $app['templating']->render(
            'form_error.html.php',
            array('title' => $title,'text' => $text, 'error' => $error)
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