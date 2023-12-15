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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->integer('duracion')->nullable();
            $table->text('sinopsis')->nullable();
            $table->unsignedBigInteger('id_cate');
            $table->unsignedBigInteger('id_dire');
            
            $table->foreign('id_cate')->references('id_cate')->on('categorias');
            $table->foreign('id_dire')->references('id_dire')->on('directores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
