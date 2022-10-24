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
        Schema::create('automotoraregional', function (Blueprint $table) {
            $table->Increments('idautomotoraregional');
            $table->string('detalles',100);
            $table->string('direccionempresa',100);
            $table->string('tipopago',100);

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
        Schema::dropIfExists('automotoraregional');
    }
};
