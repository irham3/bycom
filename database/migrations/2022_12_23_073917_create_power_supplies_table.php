<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('power_supplies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('rating');
            $table->integer('rating_count');
            $table->string('price');
            $table->enum('form_factor',[''])->unique();
            $table->foreign('form_factor')->references('type')->on('cases')->onDelete('cascade')->onUpdate('cascade');
            $table->string('efficiency_rating');
            $table->string('wattage');
            $table->string('modular');
            $table->string('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('power_supplies');
    }
};
