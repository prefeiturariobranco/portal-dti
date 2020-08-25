<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebpublicoCiclosChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webpublico_ciclos_chamados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ch_recursos_humanos');
            $table->integer('ch_tributario');
            $table->integer('ch_administrativo');
            $table->integer('ch_contabil');
            $table->integer('ch_geral');
            $table->integer('ch_transporte');
            $table->integer('ch_previdenciario');
            $table->integer('ch_infra');
            $table->string('ciclo', 32)->default(2000);
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
        Schema::dropIfExists('webpublico_ciclos_chamados');
    }
}
