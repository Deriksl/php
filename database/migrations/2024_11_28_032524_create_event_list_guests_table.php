<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventListGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_list_guests', function (Blueprint $table) {
            $table->id();  // Crea la columna 'id' autoincremental
            $table->string('guests');  // Para la columna 'guests' que almacena los nombres de los invitados
            $table->foreignId('tickets_id')->constrained('tickets')->onDelete('cascade');  // Relación con la tabla 'tickets', indicando qué ticket está asociado con este invitado
            $table->foreignId('events_pages_id')->constrained('event_pages')->onDelete('cascade');  // Relación con la tabla 'event_pages', indicando qué página del evento está asociada con este invitado
            $table->timestamps();  // Crea automáticamente las columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_list_guests');
    }
}
