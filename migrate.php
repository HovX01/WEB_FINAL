<?php
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Database\Migrations\CreateTableSeeder;

require 'vendor/autoload.php';

const BASE_PATH = __DIR__.'/';
require BASE_PATH . 'Core/functions.php';

$config = require base_path('config.php');

$capsule = new Capsule;

$capsule->addConnection([
  ...$config['database'],
  'collation' => 'utf8_unicode_ci',
  'prefix'    => '',
  'database' => $config['database']['dbname']
]);

$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods
$capsule->setAsGlobal();

// Boot Eloquent ORM
$capsule->bootEloquent();
$migrations = [
  CreateTableSeeder::class,
];
$batch = Capsule::table('migrations')->max('batch') ?? 0;
$batch++;

foreach ($migrations as $migrationFile => $migrationClass) {
    $alreadyMigrated = Capsule::table('migrations')->where('migration', $migrationFile)->exists();

    if (!$alreadyMigrated) {
        $migration = new $migrationClass;
        $migration->up();

        Capsule::table('migrations')->insert([
          'migration' => $migrationFile,
          'batch' => $batch,
        ]);

        echo "Migrated: $migrationFile\n";
    } else {
        echo "Already migrated: $migrationFile\n";
    }
}