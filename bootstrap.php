<?php

use Core\App;
use Core\Container;
use Core\Database;
use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container as VendorContainer;

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

// Make this Capsule instance available globally via static methods
$capsule->setAsGlobal();
$capsule->bootEloquent();


App::setContainer($container);
