# Ruotino di scorta

## Create the project

```terminal
composer create-project sensorario/ruotino-di-scorta
```

## Update config/routes.php

```php
<?php return [
    '/' => App\HomeController::class
];
```

## Create the controller

```php
<?php
namespace App;
class HomeController implements Command
{
    public function get($c)
    {
        $c->setResponse([
            'It' => 'works!!',
        ]);
    }
}
```

## Run php built-in server

```terminal
php -S localhost:8888 -t public
```

and then navigate into http://localhost:8888
