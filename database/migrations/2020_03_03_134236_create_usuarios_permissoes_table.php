<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosPermissoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_permissoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuarios_id');
            $table->unsignedBigInteger('permissoes_id');
            $table->tinyInteger('nivel')->default(1);
            $table->unsignedBigInteger('cadastrado_por');
            $table->timestamps();
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->foreign('permissoes_id')->references('id')->on('permissoes');
            $table->foreign('cadastrado_por')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_permissoes');
    }
}
