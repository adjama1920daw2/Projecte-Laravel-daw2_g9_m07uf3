<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraellaPrograma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graella_programa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('programa_id');
            $table->foreignId('graella_id');
            $table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('graella_id')->references('id')->on('graellas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graella_programa');
    }
}
