<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();  // Crea la columna 'id' autoincremental
            $table->text('comment_text');  // Para la columna 'comment_text' de tipo texto
            $table->float('rating')->comment('1-5');  // Para la columna 'rating', con un comentario para indicar la escala 1-5
            $table->timestamp('created_at');  // Para la columna 'created_at' de tipo timestamp
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');  // Relación con la tabla 'posts'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Relación con la tabla 'users'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_comments');
    }
}

