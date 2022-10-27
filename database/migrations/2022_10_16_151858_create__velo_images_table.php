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
        Schema::create('_velo_images', function (Blueprint $table) {
            $table->id();
            $table->string('image');


            $table->unsignedBigInteger('velo_id');
            $table->foreign('velo_id')->references('id')->on('velos')->onDelete('cascade');

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
        Schema::dropIfExists('_velo_images');
    }
};
