<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_fr')->nullable();
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('status');
            $table->string('city')->nullable();
            $table->integer('category')->nullable();
            $table->integer('brand')->nullable();
            $table->string('price')->nullable();
            $table->text('details')->nullable();
            $table->string('binding')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
