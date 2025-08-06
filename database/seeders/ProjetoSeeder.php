<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProjetoSeeder extends Seeder {
    public function run(): void {
        $faker = Faker::create();
        for ($i=0; $i<5; $i++) {
            DB::table('projetos')->insert([
                'id_usuario' => 1,
                'titulo' => $faker->sentence(3),
                'slug' => $faker->slug(),
                'descricao' => $faker->paragraph(),
                'status' => $faker->randomElement(['em_andamento','concluido']),
                'imagem' => 'https://picsum.photos/seed/' . uniqid() . '/800/400',
                'link' => $faker->url,
                'created_at' => now()
            ]);
        }
    }
}