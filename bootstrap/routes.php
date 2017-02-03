<?php

$app->get('/', '\App\Controller\IndexController:index');

$app->group('/user', function() use ($app) {
    $app->get('', '\App\Controller\UserController:index');

    $app->get('/login', '\App\Controller\UserController:login');
    $app->post('/login', '\App\Controller\UserController:loginSubmit');

    $app->get('/reset', '\App\Controller\UserController:reset');
    $app->post('/reset', '\App\Controller\UserController:resetSubmit');

    $app->group('/{id}', function() use ($app) {
        $app->get('/view', '\App\Controller\UserController:view');

    })->add(new \App\Middleware\UserAccess($app->getContainer()));
});
