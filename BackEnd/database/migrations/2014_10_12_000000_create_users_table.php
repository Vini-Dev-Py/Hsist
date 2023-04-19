<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("Login", 150)->unique();
            $table->string("Nome", 150)->unique();
            $table->longText("Imagem");
            $table->string("DataDeRegistro", 50);
            $table->integer("QuantRepos");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
