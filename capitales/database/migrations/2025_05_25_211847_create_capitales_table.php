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
    Schema::create('capitales', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('pais');
        $table->integer('poblacion');
        $table->string('continente');
        $table->float('latitud', 10, 6);
        $table->float('longitud', 10, 6);
        $table->integer('altitud')->nullable();
        $table->string('imagen')->nullable(); // ruta a imagen representativa
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capitales');
    }
};
