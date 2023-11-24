<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->id();
            $table->integer('lecturaActual');
            $table->integer('lecturaAnterior');
            $table->integer('cubosConsumidos');
            $table->double('precioConsumo');
            $table->string('mesCorrespondiente');
            $table->date('fechaLectura')->default(now());
            $table->boolean('reciboEndeudado')->default(true);
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();
            //Llave foranea
            $table->foreign('usuario_id')->references('id')->on('duenio_casas');
        });
        DB::table('recibos')->update(['mesCorrespondiente'=>now()->month]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recibo');
    }
};
