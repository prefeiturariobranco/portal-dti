<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemasWebpublicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemas_webpublicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('num_usuarios');
            $table->integer('num_linhas_codigo');
            $table->integer('num_modulos');
            $table->integer('num_telas');
            $table->integer('num_tabelas');
            $table->integer('num_horas');
            $table->integer('ch_recursos_humanos');
            $table->integer('ch_administrativo');
            $table->integer('ch_contabil');
            $table->integer('ch_transporte');
            $table->integer('ch_portais');
            $table->integer('ch_previdenciario');
            $table->integer('ch_tributario');
            $table->unsignedBigInteger('criado_por');
            $table->integer('num_areas_gestao');
            $table->integer('hr_recursos_humanos');
            $table->integer('hr_administrativo');
            $table->integer('hr_contabil');
            $table->integer('hr_transporte');
            $table->integer('hr_portais');
            $table->integer('hr_previdenciario');
            $table->integer('hr_tributario');
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
        Schema::dropIfExists('sistemas_webpublicos');
    }
}
