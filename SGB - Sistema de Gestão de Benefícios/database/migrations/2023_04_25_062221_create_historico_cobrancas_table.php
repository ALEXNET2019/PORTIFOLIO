<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoCobrancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_cobrancas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conta_receber_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('profissional_id');
            $table->date('data_cobranca');
            $table->decimal('valor_cobrado', 10, 2);
            $table->text('observacoes')->nullable();
            $table->integer('nota_cliente')->nullable();
            $table->integer('nota_profissional')->nullable();
            $table->text('comentario_cliente')->nullable();
            $table->text('comentario_profissional')->nullable();
            $table->foreign('conta_receber_id')->references('id')->on('contas_recebers');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('profissional_id')->references('id')->on('users');
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
        Schema::dropIfExists('historico_cobrancas');
    }
}
