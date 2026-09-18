<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->name(),
            'year'=>fake()->year(),
            'minutes'=>fake()->numberBetween(80, 200),
            'director_id'=>fake()->numberBetween(1, 10),
        ];
    }
}
