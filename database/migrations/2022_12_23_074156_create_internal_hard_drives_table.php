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
        Schema::create('internal_hard_drives', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('rating');
            $table->integer('rating_count');
            $table->string('price');
            $table->string('capacity');
            $table->string('price_per_gb');
            $table->string('type');
            $table->string('cache');
            $table->enum('form_factor',[''])->unique();
            $table->foreign('form_factor')->references('type')->on('cases')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('interface',[''])->unique();
            $table->foreign('interface')->references('socket_drive')->on('motherboards')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internal_hard_drives');
    }
};
