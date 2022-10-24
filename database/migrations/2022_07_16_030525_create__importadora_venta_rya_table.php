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
        Schema::create('_importadora_venta_rya', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('celular');
            $table->integer('teleempresarya');
            $table->String('oferta');
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
        Schema::dropIfExists('_importadora_venta_rya');
    }
};
