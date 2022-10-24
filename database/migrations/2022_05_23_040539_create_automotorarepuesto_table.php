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
        Schema::create('automotorarepuesto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
            $table->string('detalle');
            $table->string('direccion');
            $table->string('comunaregional');
            $table->date('fechaemision');
            $table->date('fechavencimiento');
            $table->string('trabajadorregionales');
            $table->string('formapago');
            $table->integer('unidad');
            $table->integer('descuento');
            $table->integer('ventaparciales');
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
        Schema::dropIfExists('automotorarepuesto');
    }
};
