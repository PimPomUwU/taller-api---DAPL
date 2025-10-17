<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Center>
 */
class CenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->locale('es_ES')/* ->company(), */,
            'direccion' => $this->faker->locale('es_ES')/* ->address(), */,
            'poblacion' => $this->faker->numberBetween(1000, 1000000),


            //Asignar foranea en seeder
        ];
    }
}
