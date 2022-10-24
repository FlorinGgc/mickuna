<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumo', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombreproduct');
            $table->integer('fechacaducida');
            $table->integer('fechaelaboracion');
            $table->integer('cantidadaccesor');
            $table->integer('cantidadrepuesto');
            $table->String('ventas');
            $table->integer('oferta');
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
        Schema::dropIfExists('insumo');
    }
};
