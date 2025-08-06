<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('projetos', function (Blueprint $table) {
            if (!Schema::hasColumn('projetos', 'slug')) {
                $table->string('slug')->unique()->after('titulo');
            }
        });
    }

    public function down()
    {
        Schema::table('projetos', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
