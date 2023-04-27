<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspeccaoNecessidadeDorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospeccao_necessidade_dors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prospeccao_id');
            $table->unsignedBigInteger('necessidade_dor_id');
            $table->foreign('prospeccao_id')->references('id')->on('prospeccaos')->onDelete('cascade');
            $table->foreign('necessidade_dor_id')->references('id')->on('necessidade_dores')->onDelete('cascade');
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
        Schema::dropIfExists('prospeccao_necessidade_dors');
    }
}
