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
        Schema::create('gpus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('url');
            $table->string('image')->default('placeholder.png');
            $table->enum('license', ['Intel', 'AMD', 'Nvidia']);
            $table->integer('memorySize');
            $table->integer('tdp');
            $table->integer('boostClockMhz');
            $table->integer('lengthMm');
            $table->mediumText('description');         
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
