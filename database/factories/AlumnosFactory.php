<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellidopa' => $this->faker->lastName(),
            'apellidoma' => $this->faker->lastName(),
            'dni' => $this->faker->unique()->numberBetween(10000000,99999999),
            'codigomat' => $this->faker->unique()->numberBetween(20210000,20219999),
            'fechareg' => $this->faker->dateTimeBetween('now', '+01 days'),
        ];
    }
}
