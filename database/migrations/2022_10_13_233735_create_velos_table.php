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
        Schema::create('velos', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('category_id');


            $table->string('nom');
            $table->String('serie');
            $table->longText('description')->default('');
            $table->integer('quantite')->default();
            $table->float('prix_heure')->default();
            $table->String('Disponibilite')->default('');


          //$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('velos');
    }
};
