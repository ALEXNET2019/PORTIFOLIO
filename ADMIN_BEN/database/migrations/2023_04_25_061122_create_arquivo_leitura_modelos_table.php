<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArquivoLeituraModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivo_leitura_modelos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->enum('tipo', ['planilha', 'txt']);
            $table->text('cabecalho')->nullable();
            $table->text('corpo');
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
        Schema::dropIfExists('arquivo_leitura_modelos');
    }
}
