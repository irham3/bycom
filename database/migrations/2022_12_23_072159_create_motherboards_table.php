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
            $table->string('name');
            $table->integer('price');
            $table->string('url');
            $table->string('image')->default('placeholder.png');
            $table->foreignId('cpuSocketId')->references('id')->on('cpu_sockets')->onDelete('cascade')->onUpdate('cascade');
            $table->string('formFactor');
            $table->integer('memoryMaxGB');
            $table->integer('memorySlot');
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
        Schema::dropIfExists('motherboards');
    }
};
