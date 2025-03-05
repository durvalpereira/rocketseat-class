<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            // crie os campos de
            // primeiro nome com até 30 caracterees
            // e sobrenome com até 25 caracteres
            // onde o primeiro nome é requerido e o sobrenome é opcional
            $table->string('first_name', 30)->required();
            $table->string('last_name', 25)->nullable();

            // o campo description deve ter no maximo 300 caracteres
            $table->string('description', 300);
            // o campo preço é um decimal de até 10 digitos e 1 casa decimal apenas
            $table->decimal('price', 10, 1);
            // o campo estoque é um inteiro com valores apenas positivos
            $table->unsignedInteger('stock');

            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
