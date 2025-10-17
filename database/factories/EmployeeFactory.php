<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nif' => $this->faker->unique()->regexify('[A-Za-z0-9]{10,20}'), // entre 10 y 20 caracteres
            'tlfno' => $this->faker->numerify(str_repeat('#', 12)), // exactamente 12 dígitos numéricos
            'num_hijos' => $this->faker->numberBetween(0, 5),
        ];
    }
}
