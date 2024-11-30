<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();  // Crea la columna 'id' autoincremental
            $table->string('name');
            $table->text('description');
            $table->string('location');
            $table->dateTime('date');
            $table->binary('logo')->nullable();  // Para la columna de tipo BLOB
            $table->string('status')->comment('e.g., upcoming, completed');
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
        Schema::dropIfExists('events');
    }
}
