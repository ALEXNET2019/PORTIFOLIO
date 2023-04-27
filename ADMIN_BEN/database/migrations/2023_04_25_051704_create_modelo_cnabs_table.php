<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeloCnabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo_cnabs', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 10);
            $table->string('nome', 50);
            $table->integer('posicao_inicio');
            $table->integer('posicao_fim');
            $table->unsignedBigInteger('financeira_id');
            $table->foreign('financeira_id')->references('id')->on('instituicoes_financeiras');
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
        Schema::dropIfExists('modelo_cnabs');
    }
}
