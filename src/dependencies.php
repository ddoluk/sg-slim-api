<?php

//Services

//Twig
$container['view'] = function ($container) {

    $view = new \Slim\Views\Twig(__DIR__ . '/../resourses/views', [
        'cache' => false,
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(
        $container->router,
        $container->request->getUri()
    ));

    return $view;

};

//Eloquent
$container['db'] = function () use ($capsule) {
    return $capsule;
};

//Controllers

$container['ApiController'] = function ($container) {
    return new \App\Controllers\ApiController($container);
};

$container['DefaultController'] = function ($container) {
    return new \App\Controllers\DefaultController($container);
};