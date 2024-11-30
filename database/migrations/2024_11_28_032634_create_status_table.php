<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->id();  // Crea la columna 'id' autoincremental
            $table->string('name')->unique();  // Define la columna 'name' como un campo de texto único para el nombre del estado
            $table->foreignId('events_id')->constrained('events')->onDelete('cascade');  // Relación con la tabla 'events', indicando a qué evento pertenece este estado
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
        Schema::dropIfExists('status');
    }
}
