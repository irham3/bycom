<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motherboards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('rating');
            $table->integer('rating_count');
            $table->string('price');
            $table->enum('socket_cpu',[''])->unique();
            $table->enum('form_factor',[''])->unique();
            $table->foreign('form_factor')->references('type')->on('cases')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('socket_memory',[''])->unique();
            $table->string('memory_max');
            $table->integer('memory_slots');
            $table->enum('socket_drive',[''])->unique();
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
        Schema::dropIfExists('motherboards');
    }
};
