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
        // \App\Models\User::factory(10)->create();
        \App\Models\Student::factory()->create(
            [
                'cif' => '123ABC',
                'name' => 'Silvio ',
                'lastname' => 'Vigil',
                'email' => 'silvil',
                'phone' => '77777777',
            ]
        );

        \App\Models\Student::factory()->create(
            [
                'cif' => '456DEF',
                'name' => 'Marcos ',
                'lastname' => 'San',
                'email' => 'marsan',
                'phone' => '88888888',
            ]
        );

     
      
        \App\Models\Career::factory()->create(
            [
                'codigo' => '1',
                'nombre' => 'Arquitectura',
                'descripcion' => 'Una clase para hacer edificios',
            ]
        );

        \App\Models\Career::factory()->create(
            [
                'codigo' => '2',
                'nombre' => 'Ingenieria en Sistemas',
                'descripcion' => 'Una clase para jugar a ser hacker',
            ]
        );
    }
}
