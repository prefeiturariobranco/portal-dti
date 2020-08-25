<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('lat', 12, 7);
            $table->decimal('lng', 12, 7);
            $table->string('titulo', 32);
            $table->text('descricao')->nullable();
            $table->tinyInteger('ocultar')->default(0);
            $table->unsignedBigInteger('mapas_categorias_id');
            $table->foreign('mapas_categorias_id')->references('id')->on('mapas_categorias');
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
        Schema::dropIfExists('mapas');
    }
}
