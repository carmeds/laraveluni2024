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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('apellidos');
            $table->string('nombres');
            $table->string('cargo');
            $table->string('tratamiento');
            $table->string('fechanacimiento');
            $table->string('fechacontratacion');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('usuario');
            $table->string('codigopostal');
            $table->string('pais');
            $table->string('telefono');
            $table->string('clave');
            $table->string('foto');
            $table->string('jefe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
