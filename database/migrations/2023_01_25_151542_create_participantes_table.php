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
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_participante');
            $table->unsignedBigInteger('tipo_participante_id');
            $table->unsignedBigInteger('reuniao_id');
            $table->timestamps();

            $table->foreign('tipo_participante_id')->references('id')->on('tipo_participantes');
            $table->foreign('reuniao_id')->references('id')->on('reuniao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participantes');
    }
};
