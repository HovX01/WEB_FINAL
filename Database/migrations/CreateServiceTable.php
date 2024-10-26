<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceTable
{
    public function up()
    {
        Manager::schema()->create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('icon_class');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Manager::schema()->dropIfExists('services');
    }
}