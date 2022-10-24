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
        Schema::create('empresaresiduosindu',function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidadfiltro');
            $table->String('nombrefiltro');
            $table->String('nombrequimico');
            $table->String('tipobencina');
            $table->String('nombrevendedor');
            $table->String('correo');
            $table->integer('telefono');
            $table->integer('cantidadLtaceite');
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
        Schema::dropIfExists('empresaresiduosindu');
    }
};
