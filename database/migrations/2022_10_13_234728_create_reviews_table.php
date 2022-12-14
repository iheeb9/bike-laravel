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
        Schema::create('reviews', function (Blueprint $table) {
            $table->charset = 'utf8'; 
            $table->collation = 'utf8_unicode_ci';
          $table->id();
          $table->string('nom');
          $table->date('date');
          $table->string('Description');
          $table->string('image');
          $table->timestamps();
          $table->foreignId('balade_id')->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
