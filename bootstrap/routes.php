<?php

$app->get('/', '\App\Controller\IndexController:index');
$app->get('/error', '\App\Controller\IndexController:error');

$app->group('/user', function() use ($app) {
    $app->get('', '\App\Controller\UserController:index');

    $app->get('/login', '\App\Controller\UserController:login');
    $app->post('/login', '\App\Controller\UserController:loginSubmit');

    $app->get('/reset', '\App\Controller\UserController:reset');
    $app->post('/reset', '\App\Controller\UserController:resetSubmit');

    $app->get('/logout', '\App\Controller\UserController:logout');

    $app->group('/{id}', function() use ($app) {
        $app->get('/view', '\App\Controller\UserController:view');

    })
        ->add(new \App\Middleware\IsAuthed($app->getContainer()))
        ->add(new \App\Middleware\UserAccess($app->getContainer()));
});
