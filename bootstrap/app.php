<?php

require_once __DIR__ . '/../vendor/autoload.php';

$settings = require_once __DIR__ . '/../src/settings.php';

$app = new \Slim\App($settings);

$container = $app->getContainer();

//connecting to DB
$capsule = new \Illuminate\Database\Capsule\Manager();
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

require_once __DIR__ . '/../src/dependencies.php';

require_once __DIR__ . '/../src/routes.php';