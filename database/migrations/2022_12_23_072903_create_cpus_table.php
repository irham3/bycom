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
        Schema::create('cpus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('name',[''])->unique();
            $table->integer('rating');
            $table->integer('rating_count');
            $table->string('price');
            $table->enum('socket',[''])->unique();
            $table->foreign('socket')->references('socket_cpu')->on('motherboards')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('core_count');
            $table->string('core_clock');
            $table->string('boost_clock');
            $table->string('tdp');
            $table->string('integrated_graphics');
            $table->boolean('smt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cpus');
    }
};
