<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAplicativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplicativos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imagem', 100)->nullable();
            $table->string('titulo', 100);
            $table->tinyInteger('ocultar')->default(0);
            $table->string('url', 200)->nullable();
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
        Schema::dropIfExists('aplicativos');
    }
}
