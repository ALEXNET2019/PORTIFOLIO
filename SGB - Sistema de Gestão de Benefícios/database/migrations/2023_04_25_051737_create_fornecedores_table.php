<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social', 100);
            $table->string('nome_fantasia', 100);
            $table->string('cnpj', 14)->unique();
            $table->string('email', 100);
            $table->string('telefone', 20);
            $table->string('endereco', 100);
            $table->string('cidade', 50);
            $table->string('estado', 2);
            $table->string('cep', 8);
            $table->string('servico_prestado', 100);
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
        Schema::dropIfExists('fornecedores');
    }
}
