<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('dinamico');
            $table->string('nome', 100);
            $table->string('subtitulo', 100);
            $table->string('caminho', 100);
            $table->string('link', 1024);
            $table->string('ocultar', 100)->default(0);
            $table->unsignedBigInteger('icones_categorias_id')->nullable();
            $table->foreign('icones_categorias_id')->references('id')->on('icones_categorias')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('icones');
    }
}
