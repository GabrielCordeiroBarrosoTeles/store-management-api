<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estoques', function (Blueprint $table) {
            $table->id();
            $table->string('imagem', 270);
            $table->string('nome', 85);
            $table->string('funcao', 97);
            $table->string('detalhe', 200);
            $table->string('valorcompra', 95);
            $table->string('valorvenda', 95);
            $table->integer('quantidade')->nullable();
            $table->integer('vendido')->default(0);
            $table->string('marca', 95);
            $table->string('peso', 95);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estoques');
    }
};