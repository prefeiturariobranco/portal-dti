<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infra_configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('media_chamados_fibra');
            $table->integer('media_chamados_cidade_digital');
            $table->integer('num_switch');
            $table->integer('num_servidores_virtuais');
            $table->integer('num_servidores_fisicos');
            $table->integer('num_usuarios_internet');
            $table->integer('num_email_corp');
            $table->integer('media_ataques');
            $table->integer('media_internet_social_dia');
            $table->integer('num_usuarios_internet_social');
            $table->integer('num_conexao_fibra');
            $table->integer('num_conexao_radio');
            $table->unsignedBigInteger('criado_por');
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
        Schema::dropIfExists('infra_configs');
    }
}
