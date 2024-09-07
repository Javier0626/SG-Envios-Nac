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
            $table->id();
            // Definir las claves foráneas
            $table->foreignId('id_cliente')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreignId('id_envio')->references('id')->on('envios')->onDelete('cascade');
            $table->string('estado');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientes_envios');
    }
};
