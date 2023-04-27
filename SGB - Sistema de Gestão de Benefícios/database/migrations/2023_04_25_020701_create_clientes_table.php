<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_cliente'); // "Pessoa Física" ou "Pessoa Jurídica"
            $table->string('nome');
            $table->string('razao_social')->nullable(); // campo opcional para pessoas jurídicas
            $table->string('cpf_cnpj');
            $table->string('rg')->nullable(); // campo opcional para pessoas físicas
            $table->string('estado_civil')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('inscricao_estadual')->nullable(); // campo opcional para pessoas jurídicas
            $table->string('profissao')->nullable(); // campo opcional para pessoas físicas
            $table->string('vinculo_traba')->nullable();
            $table->float('renda_mensal')->nullable(); // campo opcional para pessoas físicas
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
        Schema::dropIfExists('clientes');
    }
}
