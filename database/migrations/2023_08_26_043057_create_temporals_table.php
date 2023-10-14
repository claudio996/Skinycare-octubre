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
        Schema::create('temporals', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->char('sexo');
            $table->integer('servicios_id');
            // $table->foreign('servicios_id')->references('id')->on('servicios')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('zonas',100);   
            /* $table->unsignedBigInteger('zonas_id');
            $table->foreign('zonas_id')->references('id')->on('zonas')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade'); */
            $table->Integer('numero_min_sesion')->default(0);
            $table->Integer('numero_max_sesion')->nullable();
            $table->Integer('precio_min_sesion')->nullable();
            $table->Integer('precio_max_sesion')->nullable();
            $table->string('url_imagen', 300)->default('url');
            $table->Integer('descuento')->nullable();
            $table->string('descripcion')->nullable();
            // $table->integer('promociones_id');
            //  $table->foreign('promociones_id')->references('id')->on('promociones')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->tinyInteger('estado')->default(1); //default -> 1 active
            $table->timestamps();
            $table->index(['nombre']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temporals');
    }
};
