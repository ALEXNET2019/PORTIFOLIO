<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plano_id');
            $table->string('tipo_servico');
            $table->integer('tempo_espera');
            $table->text('descricao')->nullable();
            $table->timestamps();

            $table->foreign('plano_id')
                ->references('id')->on('planos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carencias');
    }
}
