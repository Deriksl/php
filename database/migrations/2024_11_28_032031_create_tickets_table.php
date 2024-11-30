<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();  // Crea la columna 'id' autoincremental
            $table->decimal('price', 10, 2);  // Para la columna 'price' con 2 decimales
            $table->timestamp('purchase_date');  // Para la columna 'purchase_date'
            $table->string('ticket_code')->unique();  // Columna 'ticket_code' con valor único
            $table->string('status')->comment('e.g., valid, used');  // Columna 'status' con comentario
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Relación con la tabla 'users'
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade');  // Relación con la tabla 'events'
            $table->timestamps();  // Crea 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}

