<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->foreignId('id_user')->constrained('users', 'id')->onDelete('cascade'); // FK para tabela users
            $table->enum('cargo', ['admin', 'autor', 'usuario'])->default('usuario');
            $table->string('foto')->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
