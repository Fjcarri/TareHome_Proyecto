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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('pagos_id');
            $table->unsignedBigInteger('reserva_id');
            $table->unsignedBigInteger('usuario_id');
            $table->decimal('importe', 10, 2); 
            $table->enum('status_pago', ['pendiente', 'aceptado', 'anulado']); 
            $table->timestamp('fecha_pago')->nullable(); 
            $table->timestamps();
        
            $table->foreign('reserva_id')->references('id')->on('reservas')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
