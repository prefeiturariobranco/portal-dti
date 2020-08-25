<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosArquivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_arquivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('caminho', 255);
            $table->timestamps();
            $table->tinyInteger('ocultar')->default(0);
            $table->unsignedBigInteger('documentos_id');
            $table->foreign('documentos_id')->references('id')->on('documentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos_arquivos');
    }
}
