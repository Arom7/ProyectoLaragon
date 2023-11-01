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
        Schema::create('duenio_casa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('primerApellido');
            $table->string('segundoApellido')->nullable();
            $table->text('direccionCasa');
            $table->integer('nroCasa')->nullable();
            $table->double('deudaTotal',7,2)->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('id_presidente');

            //Llave foranea dependiente de presidente
            $table->foreign('id_presidente')->references('id')->on('presidente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('duenio_casa');
    }
};
