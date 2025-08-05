<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('settings', function (Blueprint $table) {
            $table->id('id_config');
            $table->string('titulo_site', 150)->nullable();
            $table->text('descricao')->nullable();
            $table->json('redes_sociais')->nullable();
            $table->string('favicon')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('settings');
    }
};