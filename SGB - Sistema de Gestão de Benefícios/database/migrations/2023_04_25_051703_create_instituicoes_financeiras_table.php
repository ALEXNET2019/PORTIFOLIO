<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituicoesFinanceirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicoes_financeiras', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->enum('tipo', ['banco', 'cartao_credito', 'corretora']);
            $table->string('codigo_banco')->nullable();
            $table->string('codigo_agencia')->nullable();
            $table->string('nome_agencia')->nullable();
            $table->string('codigo_conta')->nullable();
            $table->string('tipo_conta')->nullable();
            $table->string('numero_cartao')->nullable();
            $table->string('bandeira_cartao')->nullable();
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
        Schema::dropIfExists('instituicoes_financeiras');
    }
}
