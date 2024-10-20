<?php
namespace Database\Migrations;


use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;

class CreateCategoryTableSeeder {
    public function up() {
        Capsule::schema()->create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamp('created_at')->nullable()->default(Carbon::now());
            $table->timestamp('updated_at')->nullable()->default(Carbon::now());
        });
    }

    public function down(): void
    {
        Capsule::schema()->dropIfExists('categories');
    }
}