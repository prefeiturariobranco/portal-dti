<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 128);
            $table->string('login', 32)->nullable();
            $table->string('senha', 255);
            $table->tinyInteger('ocultar')->default(0);
            $table->string('imagem', 255)->nullable();
            $table->timestamps();
            $table->date('data_exclusao')->nullable();
            $table->unsignedBigInteger('cargos_id');
            $table->unsignedBigInteger('departamentos_id');
            $table->string('telefone_sala', 15)->nullable();
            $table->string('telefone_pessoal', 15)->nullable();
            $table->string('email', 255)->nullable();
            $table->date('data_admissao')->nullable();
            $table->date('data_exoneracao')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->integer('status')->default(0);
            $table->integer('criado_por')->default(0);
            $table->foreign('cargos_id')->references('id')->on('cargos');
            $table->foreign('departamentos_id')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
