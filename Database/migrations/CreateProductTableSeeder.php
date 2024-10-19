<?php
namespace Database\Migrations;


use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTableSeeder {
    public function up() {
        Capsule::schema()->create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->boolean('available')->default(true);
            $table->float('price')->default(0);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Capsule::schema()->dropIfExists('products');
    }
}