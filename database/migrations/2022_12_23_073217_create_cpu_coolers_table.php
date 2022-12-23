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
        Schema::create('cpu_coolers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('rating');
            $table->integer('rating_count');
            $table->enum('cpu_support',[''])->unique();
            $table->foreign('cpu_support')->references('name')->on('cpus')->onDelete('cascade')->onUpdate('cascade');
            $table->string('price');
            $table->string('fan_rpm');
            $table->string('noise_level');
            $table->string('color');
            $table->string('radiator_size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cpu_coolers');
    }
};
