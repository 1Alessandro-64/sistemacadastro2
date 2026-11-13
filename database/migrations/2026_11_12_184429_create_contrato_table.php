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
        Schema::create('contrato', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->references('id')->on('clientes');
            $table->foreignId('veiculo_id')->references('id')->on('vehicle');
            $table->foreignId('reserva_id')->references('id')->on('reserva');
            $table->foreignId('checkout_id')->references('id')->on('checkout');
            $table->foreignId('checkin_id')->references('id')->on('checkin');
            $table->string('status');
            $table->floatval('valor_previsto');
            $table->floatval('valor_final');
            $table->timestamp('data_locacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrato');
    }
};
