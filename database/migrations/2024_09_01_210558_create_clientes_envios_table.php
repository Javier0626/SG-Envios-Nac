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
        Schema::create('clientes_envios', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_cliente')->unsigned();
            $table->bigInteger('id_envio')->unsigned();
            $table->string('estado');
            $table->timestamps();
            // Definir las claves foráneas
            $table->foreign('id_cliente')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_envio')->references('id')->on('envios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes_envios');
    }
};
