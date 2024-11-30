<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();  // Crea la columna 'id' autoincremental
            $table->string('title');  // Para la columna 'title' que almacena el título del post
            $table->text('body');  // Para la columna 'body' que almacena el contenido del post
            $table->binary('img')->nullable();  // Para la columna 'img', que almacena una imagen como BLOB (opcional)
            $table->timestamp('created_at');  // Para la columna 'created_at' que registra la fecha y hora en que se creó el post
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Relación con la tabla 'users', indicando qué usuario creó el post
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
