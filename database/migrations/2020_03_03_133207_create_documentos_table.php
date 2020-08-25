<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 255);
            $table->text('descricao');
            $table->decimal('valor', 12, 5);
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->tinyInteger('ocultar')->default(0);
            $table->unsignedBigInteger('criado_por');
            $table->unsignedBigInteger('documentos_categorias_id')->nullable();
            $table->foreign('documentos_categorias_id')->references('id')->on('documentos_categorias');
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
        Schema::dropIfExists('documentos');
    }
}
