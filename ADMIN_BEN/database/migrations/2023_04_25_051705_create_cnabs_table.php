<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCnabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnabs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cnab_modelo_id');
            $table->string('campo');
            $table->string('valor');
            $table->timestamps();
            $table->foreign('cnab_modelo_id')
                ->references('id')
                ->on('modelo_cnabs')
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
        Schema::dropIfExists('cnabs');
    }
}
