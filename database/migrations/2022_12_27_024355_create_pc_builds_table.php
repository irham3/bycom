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
        Schema::create('pc_builds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('code')->unique();
            $table->string('name')->default('PC Rakitan User');
            $table->foreignId('cpuId')->nullable()->references('id')->on('cpus')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('moboId')->nullable()->references('id')->on('motherboards')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('memoryId')->nullable()->references('id')->on('memories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('gpuId')->nullable()->references('id')->on('gpus')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('caseId')->nullable()->references('id')->on('cases')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('inStorageId')->nullable()->references('id')->on('internal_storages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('psuId')->nullable()->references('id')->on('power_supplies')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('totalPrice')->default(0);          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_pc_builds');
    }
};
