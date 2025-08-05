<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id_post');
            $table->foreignId('id_usuario')->constrained('usuarios', 'id_usuario')->onDelete('cascade');
            $table->string('titulo', 150);
            $table->text('conteudo');
            $table->string('imagem')->nullable();
            $table->enum('status', ['rascunho', 'publicado'])->default('rascunho');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('posts');
    }
};