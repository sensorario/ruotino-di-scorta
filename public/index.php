<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\JsonServer;
use App\RequestContext;
use App\ControllerFactory;

$routes = require_once __DIR__ . '/../config/routes.php';

echo (new JsonServer(
    new RequestContext,
    new ControllerFactory($routes),
))();
