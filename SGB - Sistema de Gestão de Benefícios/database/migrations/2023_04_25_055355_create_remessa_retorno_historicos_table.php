<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemessaRetornoHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remessa_retorno_historicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_remessa');
            $table->unsignedBigInteger('id_cnab');
            $table->String('valor');
            $table->date('data_geracao');
            $table->date('data_leitura')->nullable();
            $table->timestamps();
            $table->foreign('id_cnab')->references('id')->on('cnabs');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remessa_retorno_historicos');
    }
}
