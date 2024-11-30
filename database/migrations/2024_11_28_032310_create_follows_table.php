<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->id();  // Crea la columna 'id' autoincremental
            $table->foreignId('follower_id')->constrained('users')->onDelete('cascade');  // Relación con la tabla 'users' para el seguidor
            $table->foreignId('followed_id')->constrained('users')->onDelete('cascade');  // Relación con la tabla 'users' para el seguido
            $table->timestamp('created_at');  // Para la columna 'created_at' que registra el momento de la creación del seguimiento
            $table->unique(['follower_id', 'followed_id']);  // Asegura que un usuario no pueda seguir al mismo usuario más de una vez
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follows');
    }
}
