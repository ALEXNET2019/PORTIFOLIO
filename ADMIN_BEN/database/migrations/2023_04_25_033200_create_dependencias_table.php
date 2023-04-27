<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_titular');
            $table->unsignedBigInteger('id_dependente');
            $table->string('tipo_dependencia');
            $table->date('data_admissao')->nullable();
            $table->string('matricula')->nullable();
            $table->string('cargo')->nullable(); 
            $table->string('parentesco')->nullable();
            $table->timestamps();
            $table->foreign('id_titular')
                ->references('id')->on('clientes')
                ->onDelete('cascade');
            $table->foreign('id_dependente')
                ->references('id')->on('clientes')
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
        Schema::dropIfExists('dependencias');
    }
}
