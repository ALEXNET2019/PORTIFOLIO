<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcorrenciasCnabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocorrencias_cnabs', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 5);
            $table->string('descricao');
            $table->string('tipo', 20);
            $table->unsignedBigInteger('cnab_id');
            $table->foreign('cnab_id')->references('id')->on('modelo_cnabs');
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
        Schema::dropIfExists('ocorrencias_cnabs');
    }
}
