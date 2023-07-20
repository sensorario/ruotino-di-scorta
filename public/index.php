<?php

require_once __DIR__ . '/../vendor/autoload.php';

$routes = require_once __DIR__ . '/../config/routes.php';

echo (new App\JsonServer(
    new App\RequestContext,
    new App\ControllerFactory($routes),
))();
