<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipeConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipe_configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('num_comissionados');
            $table->integer('num_tercerizados');
            $table->integer('num_estagiarios');
            $table->integer('num_efetivos');
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
        Schema::dropIfExists('equipe_configs');
    }
}
