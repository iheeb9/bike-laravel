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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
          $table->string('Subject');
          $table->string('Commentaire');
          $table->string('image');
            $table->timestamps();
          $table->foreignId('user_id')->constrained()
            ->onDelete('restrict')
            ->onUpdate('restrict');
          $table->foreignId('review_id')->constrained()
            ->onDelete('restrict')
            ->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
