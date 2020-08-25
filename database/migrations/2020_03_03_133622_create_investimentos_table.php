<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investimentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 128);
            $table->decimal('valor', 12, 2)->default('0.00');
            $table->tinyInteger('ocultar')->default('0');
            $table->unsignedBigInteger('investimentos_categorias_id');
            $table->unsignedBigInteger('criado_por');
            $table->string('cor', 32)->default('blue');
            $table->foreign('investimentos_categorias_id')->references('id')->on('investimentos_categorias');
            $table->foreign('criado_por')->references('id')->on('usuarios');
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
        Schema::dropIfExists('investimentos');
    }
}
