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
        Schema::create('balades', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->string('info_billetterie');
            $table->integer('nombre');
            $table->integer('jauge');
            $table->integer('nbre_participant')->default(0);
            $table->integer('prix');
            $table->integer('distance');
            $table->string('guide_accompagnateur');
            $table->string('depart');
            $table->string('arrive');
            $table->date('date');
            $table->string('Services');
            $table->string('disponible');
             $table->string('image');




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
        Schema::dropIfExists('balades');
    }
};
