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
        Schema::create('detalle_promociones', function (Blueprint $table) {

            $table->Integer('precio_min_sesion')->nullable();
            $table->Integer('precio_max_sesion')->nullable();
            $table->string('url_imagen', 300)->default('url');
            $table->Integer('descuento')->nullable();
            $table->Integer('total')->nullable();
            $table->string('descripcion')->nullable();
            $table->unsignedBigInteger('promociones_id');
            $table->foreign('promociones_id')->references('id')->on('promociones')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_promociones');
    }
};
