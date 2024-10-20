<?php
namespace Database\Migrations;


use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;

class CreateProductOrderTableSeeder {
    public function up() {

        Capsule::schema()->create('product_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreignId('order_id');
            $table->integer('quantity');
        });
    }

    public function down() {
        Capsule::schema()->dropIfExists('product_orders');
    }
}