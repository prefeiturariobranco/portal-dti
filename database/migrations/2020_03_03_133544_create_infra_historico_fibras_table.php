<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraHistoricoFibrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infra_historico_fibras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 32);
            $table->integer('ano', false, true);
            $table->integer('quilometragem', false, true);
            $table->tinyInteger('ocultar')->default(0);
            $table->string('cor', 7)->default('#ff0017');
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
        Schema::dropIfExists('infra_historico_fibras');
    }
}
