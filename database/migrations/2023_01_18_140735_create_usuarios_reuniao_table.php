<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_reuniao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reuniao_id');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

            $table->foreign('reuniao_id')->references('id')->on('reuniao');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_reuniao');
    }
};
