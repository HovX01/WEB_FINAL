<?php
namespace Database\Migrations;


use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
class CreateTableSeeder {
    public function up() {
        Capsule::schema()->create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('role')->default('user');
            $table->timestamps();
        });
    }

    public function down() {
        Capsule::schema()->dropIfExists('users');
    }
}