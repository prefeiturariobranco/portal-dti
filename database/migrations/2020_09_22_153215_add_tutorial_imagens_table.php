<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTutorialImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tutoriais', function (Blueprint $table) {
            //
            $table->string('imagem1', 200)->nullable();
            $table->string('imagem2', 200)->nullable();
            $table->string('imagem3', 200)->nullable();
            $table->string('imagem4', 200)->nullable();
            $table->string('imagem5', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tutoriais', function (Blueprint $table) {
            //
        });
    }
}
