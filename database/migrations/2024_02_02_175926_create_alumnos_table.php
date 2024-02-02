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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 15)->unique();
            $table->string('nombre', 25);
            $table->string('apellido', 25);
            $table->unsignedInteger('semestre');
            $table->string('grupo', 6);
            $table->foreignId('id_carrera')->constrained('carreras');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
