<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$migrationFiles = glob(__DIR__ . '/Database/migrations/*.php');

if (!Capsule::schema()->hasTable('migrations')) {
    Capsule::schema()->create('migrations', function ($table) {
        $table->id();
        $table->string('migration');
        $table->integer('batch');
        $table->timestamp('migrated_at')->nullable();
    });
}

$batch = Capsule::table('migrations')->max('batch') ?? 0;
$batch++;

foreach ($migrationFiles as $file) {
    require_once $file;
    echo "Migrating: $file\n";
    $alreadyMigrated = Capsule::table('migrations')->where('migration', $file)->exists();

    if (!$alreadyMigrated) {
        $migrationClass = basename($file, '.php');
        $class = 'Database\\Migrations\\' . $migrationClass;
        $migration = new $class();
        $migration->up();

        Capsule::table('migrations')->insert([
            'migration' => $file,
            'batch' => $batch,
        ]);

        echo "Migrated: $file\n";
    } else {
        echo "Already migrated: $file\n";
    }
}