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

// ➢ Crea una migración para una tabla pivot llamada book_category que
// relaciona los registros de las tablas books y categories con los
// campos book_id (clave foránea de la tabla books) y category_id
// (clave foránea de la tabla categories).


        Schema::create('book_category', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('book_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');;
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');;


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_category');
    }
};
