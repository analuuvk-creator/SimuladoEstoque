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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->enum('categoria', ['cimento', 'tinta', 'argamassa']);
            $table->date('prazo_validade');
            $table->string('cor');
            $table->string('textura');
            $table->decimal('peso', 3,1);
            $table->enum('aplicacao', ['fundação', 'acabamento', 'estrutura']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};

