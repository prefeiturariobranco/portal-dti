<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanejamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planejamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->text('descricao');
            $table->date('data_entrega');
            $table->timestamps();
            $table->tinyInteger('ocultar')->default(0);
            $table->unsignedBigInteger('planejamentos_categorias_id')->nullable();
            $table->unsignedBigInteger('criado_por');
            $table->string('responsavel', 32)->nullable();
            $table->foreign('criado_por')->references('id')->on('usuarios');
            $table->foreign('planejamentos_categorias_id')->references('id')->on('planejamentos_categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planejamentos');
    }
}
