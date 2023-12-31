<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Clientes::factory(10)->create();
         \App\Models\Libros::factory(10)->create();

            // Crear un usuario específico
        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'id' => 90,
        ]);

        // Crear dos clientes relacionados con el usuario específico
        \App\Models\Clientes::factory(3)->create([
            'user_id' => $user->id,
            // Otros atributos del cliente
        ]);
        }
}
