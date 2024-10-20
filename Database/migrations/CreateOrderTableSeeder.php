<?php
namespace Database\Migrations;


use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;

class CreateOrderTableSeeder {
    public function up() {

        Capsule::schema()->create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('total', 10, 2);
            $table->string('status');
            $table->foreignId('created_by');
            $table->timestamp('created_at')->nullable()->default(Carbon::now());
            $table->timestamp('updated_at')->nullable()->default(Carbon::now());
        });
    }

    public function down() {
        Capsule::schema()->dropIfExists('orders');
    }
}