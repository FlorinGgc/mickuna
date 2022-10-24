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
        Schema::create('empresanacionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ventaproducto');
            $table->string('ventaaccesorios');
            $table->string('ventarepuesto');
            $table->string('cantidadproducto');
            $table->string('cantidadpyr');
            $table->string('cantidadaccesorio');
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
        Schema::dropIfExists('empresanacionals');
    }
};
