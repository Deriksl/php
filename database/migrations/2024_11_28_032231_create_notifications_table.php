<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();  // Crea la columna 'id' autoincremental
            $table->text('message');  // Para la columna 'message' que contiene el mensaje de la notificación
            $table->timestamp('sent_at');  // Para la columna 'sent_at' que registra el momento de envío de la notificación
            $table->boolean('read_status');  // Para la columna 'read_status', que indica si la notificación ha sido leída (booleano)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Relación con la tabla 'users'
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade');  // Relación con la tabla 'events'
            $table->timestamps();  // Crea 'created_at' y 'updated_at' automáticamente
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
