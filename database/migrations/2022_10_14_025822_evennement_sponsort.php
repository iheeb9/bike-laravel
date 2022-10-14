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
        Schema::create('evennement_sponsort', function (Blueprint $table) {
          $table->id();
          $table->foreignId('evennement_id')->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

          $table->foreignId('sponsort_id')->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::table('evennement_sponsort', function (Blueprint $table) {
            //
        });
    }
};
