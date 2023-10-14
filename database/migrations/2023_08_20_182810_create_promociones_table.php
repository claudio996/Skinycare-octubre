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
        Schema::create('promociones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->char('sexo',1)->default('F');
            $table->unsignedBigInteger('servicios_id');
            $table->foreign('servicios_id')->references('id')->on('servicios')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('zonas',100);   
            $table->unsignedBigInteger('zonas_id');
            $table->foreign('zonas_id')->references('id')->on('zonas')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');             $table->Integer('numero_min_sesion')->default(0);
            $table->Integer('numero_max_sesion')->nullable();

            $table->tinyInteger('estado')->default(1); //default -> 1 active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promociones');
    }
};
