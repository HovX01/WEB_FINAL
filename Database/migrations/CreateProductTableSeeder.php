<?php
namespace Database\Migrations;


use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;

class CreateProductTableSeeder {
    public function up() {
        Capsule::schema()->create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->boolean('available')->default(true);
            $table->decimal('price', 10, 2);
            $table->string('image')->nullable();
            $table->timestamp('created_at')->nullable()->default(Carbon::now());
            $table->timestamp('updated_at')->nullable()->default(Carbon::now());
        });
    }

    public function down() {
        Capsule::schema()->dropIfExists('products');
    }
}