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
        Schema::create('reuniao', function (Blueprint $table) {
            $table->id();
            $table->string('participantes');
            $table->text('solicitacao');
            $table->text('providencias');
            $table->unsignedBigInteger('sistema_id');
            $table->unsignedBigInteger('unidade_id');
            $table->timestamps();

            $table->foreign('sistema_id')->references('id')->on('sistemas');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reuniao');
    }
};
