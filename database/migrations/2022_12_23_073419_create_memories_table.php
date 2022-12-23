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
        Schema::create('memories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('rating');
            $table->integer('rating_count');
            $table->string('price');
            $table->enum('socket',[''])->unique();
            $table->foreign('socket')->references('socket_memory')->on('motherboards')->onDelete('cascade')->onUpdate('cascade');
            $table->string('speed');
            $table->string('modules');
            $table->string('color');
            $table->string('first_word_latency');
            $table->integer('cas_latency');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memories');
    }
};
