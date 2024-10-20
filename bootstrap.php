<?php

use Core\App;
use Core\Container;
use Core\Database;
use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container as VendorContainer;

require BASE_PATH . 'vendor/autoload.php';
require BASE_PATH . 'Core/functions.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$container = new Container();

$config = require base_path('config.php');

$container->bind('Core\Database', function () use ($config) {
    return new Database($config['database']);
});

$capsule = new Capsule;
$capsule->addConnection([
  ...$config['database'],
  'collation' => 'utf8_unicode_ci',
  'prefix'    => '',
  'database' => $config['database']['dbname']
]);

$capsule->setEventDispatcher(new Dispatcher(new VendorContainer));

$capsule->setAsGlobal();
$capsule->bootEloquent();


App::setContainer($container);
