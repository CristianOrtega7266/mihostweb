<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\mascotas1; // Asegúrate de que esta línea esté presente
use Faker\Factory as Faker; // Asegúrate de que esta línea esté presente

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Instancia de Faker para generar datos aleatorios
        $faker = Faker::create();

        // Crear 100 registros de mascotas
        for ($i = 0; $i < 100; $i++) {
            mascotas1::create([
                'nombre' => $faker->name, // Nombre aleatorio
                'especie' => $faker->randomElement(['perro', 'gato', 'pájaro', 'pez']), // Especie aleatoria
                'raza' => $faker->word, // Raza aleatoria
                'edad' => $faker->numberBetween(1, 15), // Edad aleatoria entre 1 y 15
            ]);
        }
    }
}
