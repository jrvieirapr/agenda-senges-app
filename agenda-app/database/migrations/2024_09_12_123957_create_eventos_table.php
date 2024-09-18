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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
           
            //Data do evento: tipo data
            $table->date('data');
            //Descrição: texto
            $table->text('descricao');
            //Hora Inicial: hora
            $table->time('inicio');
            //Hora Final: hora
            $table->time('final');
            //Contato: texto
            $table->string('contato');
            //Realizado: booleano
            // para que meu evento seja nulo usar o nullable
            $table->boolean('realizado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
