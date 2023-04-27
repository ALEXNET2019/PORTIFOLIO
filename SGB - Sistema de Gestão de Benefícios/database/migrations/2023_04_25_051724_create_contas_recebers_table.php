<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasRecebersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas_recebers', function (Blueprint $table) {
            $table->id();
            $table->String('cliente_id');
            $table->string('cpf-cnpj');
            $table->string('contrato_id');
            $table->decimal('valor_total', 10, 2);
            $table->date('data_vencimento');
            $table->string('forma_pagamento');
            $table->string('situacao')->default('pendente');
            $table->date('data_pagamento')->nullable();
            $table->string('boleto_numero')->nullable();
            $table->date('boleto_vencimento')->nullable();
            $table->decimal('boleto_valor', 10, 2)->nullable();
            $table->string('boleto_codigo_barras')->nullable();
            $table->string('boleto_linha_digitavel')->nullable();
            $table->string('boleto_url')->nullable();
            $table->string('cartao_numero')->nullable();
            $table->string('cartao_nome')->nullable();
            $table->string('cartao_validade')->nullable();
            $table->string('cartao_cvv')->nullable();
            $table->string('cheque_banco')->nullable();
            $table->string('cheque_agencia')->nullable();
            $table->string('cheque_conta')->nullable();
            $table->string('cheque_numero')->nullable();
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
        Schema::dropIfExists('contas_recebers');
    }
}
