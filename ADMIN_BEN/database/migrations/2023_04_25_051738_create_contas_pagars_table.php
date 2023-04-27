<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContasPagarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contas_pagars', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 100);
            $table->string('tipo', 10);
            $table->unsignedBigInteger('fornecedor_id')->nullable();
            $table->decimal('valor', 10, 2);
            $table->date('data_vencimento');
            $table->string('numero_documento', 50)->nullable();
            $table->text('observacoes')->nullable();
            $table->boolean('pago')->default(false);
            $table->date('data_pagamento')->nullable();
            $table->string('forma_pagamento', 20)->nullable();
            $table->string('numero_comprovante', 50)->nullable();
            $table->text('detalhes_pagamento')->nullable();
            $table->string('status', 20)->nullable();
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
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
        Schema::dropIfExists('contas_pagars');
    }
}
