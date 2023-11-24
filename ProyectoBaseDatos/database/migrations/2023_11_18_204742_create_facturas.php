<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->double('pago_total');
            $table->date('fecha_pago')->default(now());
            $table->unsignedBigInteger('id_recibo');
            $table->unsignedBigInteger('id_usuario');
            //Llave foranea
            $table->foreign('id_recibo')->references('id')->on('recibos');
            $table->foreign('id_usuario')->references('id')->on('duenio_casas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
