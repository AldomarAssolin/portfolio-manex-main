<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->foreignId('id_usuario')->constrained('usuarios', 'id_usuario')->onDelete('cascade');
            $table->foreignId('id_post')->constrained('posts', 'id_post')->onDelete('cascade');
            $table->primary(['id_usuario','id_post']);
        });
    }
    public function down(): void {
        Schema::dropIfExists('favoritos');
    }
};