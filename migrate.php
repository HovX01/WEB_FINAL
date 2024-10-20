<?php

use Database\Migrations\{
    CreateTableSeeder,
    CreateCategoryTableSeeder,
    CreateProductTableSeeder,
    CreateOrderTableSeeder,
    CreateProductOrderTableSeeder
};
use Illuminate\Database\Capsule\Manager as Capsule;

const BASE_PATH = __DIR__.'/';

require BASE_PATH . 'bootstrap.php';

$migrations = [
    CreateTableSeeder::class,
    CreateCategoryTableSeeder::class,
    CreateProductTableSeeder::class,
    CreateOrderTableSeeder::class,
    CreateProductOrderTableSeeder::class,
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