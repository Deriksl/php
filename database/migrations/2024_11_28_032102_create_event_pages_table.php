<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_pages', function (Blueprint $table) {
            $table->id();  // Crea la columna 'id' autoincremental
            $table->binary('custom_logo');  // Para la columna 'custom_logo' que contiene una imagen (blob)
            $table->binary('custom_banner');  // Para la columna 'custom_banner' que contiene una imagen (blob)
            $table->text('custom_description');  // Para la columna 'custom_description' de tipo texto
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
        Schema::dropIfExists('event_pages');
    }
}
