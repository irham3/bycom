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
        Schema::create('video_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('rating');
            $table->integer('rating_count');
            $table->string('price');
            $table->string('chipset');
            $table->string('tdp');
            $table->string('boost_clock');
            $table->string('color');
            $table->enum('length',[''])->unique();
            $table->foreign('length')->references('type')->on('cases')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_cards');
    }
};
