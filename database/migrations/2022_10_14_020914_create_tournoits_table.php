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
        Schema::create('tournoits', function (Blueprint $table) {
            $table->charset = 'utf8'; 
            $table->collation = 'utf8_unicode_ci';
            $table->id();
            $table->string('nom');
            $table->date('date');
            $table->timestamps();
            $table->foreignId('association_id')->constrained()
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
        Schema::dropIfExists('tournoits');
    }
};
