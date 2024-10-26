<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

class CreateFoodTable
{
    public function up()
    {
        Manager::schema()->create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('price');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Manager::schema()->dropIfExists('foods');
    }
}