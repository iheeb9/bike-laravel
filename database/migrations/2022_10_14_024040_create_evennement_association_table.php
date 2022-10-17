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
      {
        Schema::create('evennement_association', function (Blueprint $table) {
          $table->charset = 'utf8'; 
          $table->collation = 'utf8_unicode_ci';
          $table->id();
          $table->foreignId('evennement_id')->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');

          $table->foreignId('association_id')->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
          $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      {
        Schema::table('evennement_association', function (Blueprint $table) {
          //
        });
      }
    }
};
