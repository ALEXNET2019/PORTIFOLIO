<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspeccaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospeccaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->enum('classificacao', ['frio', 'morno', 'quente', 'muito quente']);
            $table->dateTime('data_contato');
            $table->integer('tempo_duracao');
            $table->enum('interesse', ['baixo', 'médio', 'alto']);
            $table->enum('disponibilidade_contato', ['sim', 'não', 'não sei'])->default('não sei');
            $table->enum('envolvimento_pessoas', ['decisor', 'influenciador', 'usuário'])->nullable();
            $table->enum('estagio_funil', ['conscientização', 'interesse', 'decisão', 'ação'])->nullable();
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
        Schema::dropIfExists('prospeccaos');
    }
}
