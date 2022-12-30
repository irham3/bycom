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
        Schema::create('user_pc_builds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('detailPcBuildId')->references('id')->on('detail_pc_builds')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pc_builds');
    }
};
