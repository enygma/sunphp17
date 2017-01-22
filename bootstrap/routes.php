<?php

$app->get('/', '\App\Controller\IndexController:index');

$app->group('/user', function() use ($app) {
    $app->get('', '\App\Controller\UserController:index');

    $app->group('/{id}', function() use ($app) {
        $app->get('/view', '\App\Controller\UserController:view');

    })->add(new \App\Middleware\UserAccess($app->getContainer()));
});
