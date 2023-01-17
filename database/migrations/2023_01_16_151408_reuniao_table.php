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
            $table->string('solicitacao');
            $table->string('providencias')->nullable();
            $table->timestamps();

            $table->foreign('sistema_id')->references('id')->on('sistema');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->foreign('unidades_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
