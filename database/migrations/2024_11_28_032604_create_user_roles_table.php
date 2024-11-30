<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();  // Crea la columna 'id' autoincremental
            $table->string('role');  // Para la columna 'role' que almacena el rol del usuario (ej., admin, guest, etc.)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Relación con la tabla 'users', indicando qué usuario tiene este rol
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade');  // Relación con la tabla 'events', indicando a qué evento está asociado este rol
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
        Schema::dropIfExists('user_roles');
    }
}

