<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ti_local', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('secretaria_id');
            $table->string('nome', 100);
            $table->string('telefone', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->tinyInteger('ocultar')->default(0);
            $table->foreign('secretaria_id')->references('id')->on('secretarias')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ti_locals');
    }
}
