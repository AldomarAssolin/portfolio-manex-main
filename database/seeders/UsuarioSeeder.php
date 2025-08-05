<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder {
    public function run(): void {
        $user = User::create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        Usuario::create([
            'id_user' => $user->id,
            'cargo' => 'admin',
            'bio' => 'Usuário administrador padrão',
        ]);
    }
}
