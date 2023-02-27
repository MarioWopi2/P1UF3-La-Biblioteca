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

// ➢ Crea una migración para una tabla llamada books con los siguientes
// campos: id (clave primaria, autincremental), isbn (cadena de texto,
// única), title (cadena de texto), author (cadena de texto),
// published_date (fecha), description (cadena de texto), price
// (número decimal), created_at y updated_at (campos de fecha y
// hora).

        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn')->unique();
            $table->string('title');
            $table->string('author');
            $table->date('published_date');
            $table->string('description');
            $table->float('price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
