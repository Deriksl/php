<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();  // Crea la columna 'id' autoincremental
            $table->string('payment_type');  // Para la columna 'payment_type', que almacena el tipo de pago (e.g., debit, credit, PayPal)
            $table->text('details');  // Para la columna 'details', que almacena los detalles del pago (estos deben ser cifrados)
            $table->timestamp('created_at');  // Para la columna 'created_at' que registra el momento en que se creó el método de pago
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Relación con la tabla 'users', indicando qué usuario tiene este método de pago
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_methods');
    }
}
