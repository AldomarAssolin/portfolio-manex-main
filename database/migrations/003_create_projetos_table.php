<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id('id_projeto');
            $table->foreignId('id_usuario')->constrained('usuarios', 'id_usuario')->onDelete('cascade');
            $table->string('titulo', 150);
            $table->text('descricao');
            $table->string('imagem')->nullable();
            $table->enum('status', ['em_andamento', 'concluido'])->default('em_andamento');
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('projetos');
    }
};