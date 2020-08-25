<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcontecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acontecimentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 128);
            $table->text('descricao');
            //FUNCIONA COMO DATA DE CRIACAO E UPDATE
            $table->timestamps();
            $table->tinyInteger('ocultar', false, false)->default(0);
            $table->unsignedBigInteger('criado_por');
            $table->integer('ano');
            $table->foreign('criado_por')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acontecimentos');
    }
}
